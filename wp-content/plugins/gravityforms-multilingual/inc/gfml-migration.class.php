<?php

class GFML_Migration{

    private $tm_api;

    /**
     * @param GFML_TM_API $tm_api
     */
    public function __construct($tm_api){
        $this->tm_api = $tm_api;
    }

    public function migrate() {
        global $wpdb;

        $form_ids = $wpdb->get_col ( "SELECT id FROM {$wpdb->prefix}rg_form" );
        foreach ( $form_ids as $id ) {
            $form = RGFormsModel::get_form_meta ( $id, true );
            $this->tm_api->update_form_translations ( $form, true );
            $wpdb->delete (
                $wpdb->prefix . 'icl_translations',
                array( 'element_id' => $id, 'element_type' => 'post_gravity_form' )
            );

            $this->migrate_old_translated_values ( $id );
        }
    }

    private function migrate_old_translated_values( $form_id ) {
        global $wpdb;

        $st_context = $this->tm_api->get_st_context ( $form_id );
        $form_strings = array_keys ( $this->tm_api->get_form_strings ( $form_id ) );
        foreach ( $form_strings as &$string_name ) {
            $string_name = "{$form_id}_" . $string_name;
        }
        $s_name_in = wpml_prepare_in ( $form_strings );

        $id_s_needing_update = $wpdb->get_results(
            $wpdb->prepare (
                "SELECT st.id AS id, cs.id AS right_id
                 FROM {$wpdb->prefix}icl_strings s
                 JOIN {$wpdb->prefix}icl_strings cs
                  ON CONCAT(%s,cs.title) = s.name
                 JOIN {$wpdb->prefix}icl_string_translations st
                  ON s.id = st.string_id
                 LEFT JOIN {$wpdb->prefix}icl_string_translations cst
                  ON cs.id = cst.string_id AND st.language = cst.language
                 WHERE s.context = 'gravity_form'
                  AND cs.context = %s
                  AND cst.language IS NULL
                  AND s.name IN ({$s_name_in})",
                $form_id . '_',
                $st_context
            )
        );

        foreach ( $id_s_needing_update as $id_data ) {
            $wpdb->update (
                $wpdb->prefix . 'icl_string_translations',
                array( 'string_id' => $id_data->right_id ),
                array( 'id' => $id_data->id )
            );
        }
    }
}