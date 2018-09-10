<?php
namespace ATU\Theme\GravityForms;

/*
Insert this script into functions.php in your WordPress theme (be cognizant of the opening and closing php tags) to allow field groups in Gravity Forms. The script will create two new field types - Open Group and Close Group. Add classes to your Open Group fields to style your groups.
Note that there is a stray (but empty) <li> element created. It is given the class 'fieldgroup_extra_li' so that you can hide it in your CSS if needed.
*/
function test_setup() {
	add_filter( 'gform_add_field_buttons', __NAMESPACE__ . '\add_fieldgroup_fields' );
	add_filter( 'gform_field_type_title', __NAMESPACE__ . '\field_group_titles' );
	add_filter( 'gform_field_content', __NAMESPACE__ . '\create_gf_field_group', 10, 5 );
	add_action( 'gform_field_css_class', __NAMESPACE__ .  '\close_field_group_class', 10, 3 );
	add_action( 'gform_editor_js_set_default_values', __NAMESPACE__ . '\field_group_default_labels' );
	add_action( 'gform_editor_js', __NAMESPACE__ .  '\allow_fieldgroup_settings' );
}



function add_fieldgroup_fields( $field_groups ) {
	foreach ( $field_groups as &$group ) {
		if ( $group['name'] == 'standard_fields' ) {
			$group["fields"][] = array("class"=>"button", "value" => __("Open Group", "gravityforms"), "onclick" => "StartAddField('fieldgroupopen');");
			$group["fields"][] = array("class"=>"button", "value" => __("Close Group", "gravityforms"), "onclick" => "StartAddField('fieldgroupclose');");
			break;
		}
	}
	return $field_groups;
}

// Add title to the Field Group fields
function field_group_titles( $type ) {
	if ( $type == 'fieldgroupopen' ) {
		return __( 'Open Field Group', 'gravityforms' );
	} elseif ( $type == 'fieldgroupclose' ) {
		return __( 'Close Field Group', 'gravityforms' );
	}
}

function create_gf_field_group( $content, $field, $value, $lead_id, $form_id ) {
	if ( ! is_admin() ) {
		if ( rgar( $field, 'type' ) === 'fieldgroupopen' ) {
			$content = '<ul><li style="display: none;">';
		} elseif ( rgar( $field, 'type' ) === 'fieldgroupclose' ) {
			$content = '</li></ul><!-- close field group --><li style="display: none;">';
		}
	}
	return $content;
}

// Add a CSS class to the Field Group Close field so we can hide the extra <li> that is created.
function close_field_group_class( $classes, $field, $form ) {
	if ( 'fieldgroupclose' === $field['type'] ) {
		$classes .= ' fieldgroup_extra_li';
	}
	return $classes;
}

function field_group_default_labels() {
	?>
	case 'fieldgroupopen' :
		field.label = 'Field Group Open';
	break;
	case 'fieldgroupclose' :
		field.label = 'Field Group Close';
	break;
	<?php
}


function allow_fieldgroup_settings() {
	?>
	<script type='text/javascript'>
		fieldSettings['fieldgroupopen'] = fieldSettings['text'] + ', .cssClass';
		fieldSettings['fieldgroupclose'] = fieldSettings['text'] + ', .cssClass';
	</script>
	<?php
}
?>
