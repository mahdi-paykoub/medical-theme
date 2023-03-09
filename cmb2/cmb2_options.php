<?php

/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class Medicalprefix_Admin
{
    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'pystrtupprefix_options';
    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id = 'pystrtupprefix_option_metabox';
    /**
     * Options Page title
     * @var string
     */
    protected $title = '';
    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';
    /**
     * Holds an instance of the object
     *
     * @var Medicalprefix_Admin
     **/
    private static $instance = null;

    /**
     * Constructor
     * @since 0.1.0
     */
    private function __construct()
    {
        // Set our title
        $this->title = __('تنظیمات سایت', 'medicalprefix');
    }

    /**
     * Returns the running object
     *
     * @return Medicalprefix_Admin
     **/
    public static function get_instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Medicalprefix_Admin();
            self::$instance->hooks();
        }
        return self::$instance;
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks()
    {
        add_action('admin_init', array($this, 'init'));
        add_action('admin_menu', array($this, 'add_options_page'));
        add_action('cmb2_admin_init', array($this, 'add_options_page_metabox'));
    }

    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init()
    {
        register_setting($this->key, $this->key);
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page()
    {
        $this->options_page = add_menu_page($this->title, $this->title, 'manage_options', $this->key, array($this, 'admin_page_display'));
        // Include CMB CSS in the head to avoid FOUC
        add_action("admin_print_styles-{$this->options_page}", array('CMB2_hookup', 'enqueue_cmb_css'));
    }

    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display()
    {
        ?>
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
            <?php cmb2_metabox_form($this->metabox_id, $this->key); ?>
        </div>
        <?php
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_metabox()
    {
        // hook in our save notices
        add_action("cmb2_save_options-page_fields_{$this->metabox_id}", array($this, 'settings_notices'), 10, 2);
        $cmb = new_cmb2_box(array(
            'id' => $this->metabox_id,
            'hookup' => false,
            'cmb_styles' => false,
            'show_on' => array(
                // These are important, don't remove
                'key' => 'options-page',
                'value' => array($this->key,)
            ),
        ));

        $general_options = $cmb->add_field(array(
            'id' => 'general_options',
            'type' => 'group',
            'description' => __('تنظیمات کلی سایت', 'cmb2'),
            'repeatable' => false, // use false if you want non-repeatable group
            'options' => array(
                'group_title' => __('متن های اصلی سایت', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
                'sortable' => true,
                'closed' => true, // true to have the groups closed by default
            ),
        ));
	    $cmb->add_group_field($general_options, array(
		    'name' => 'نام سایت',
		    'id' => 'site_name',
		    'type' => 'text',
	    ));
        $cmb->add_group_field($general_options, array(
            'name' => 'متن بالا هدر صفحه اصلی',
            'id' => 'header_text_1',
            'type' => 'textarea_small',
        ));

	    $cmb->add_group_field($general_options, array(
		    'name' => 'متن اصلی هدر صفحه اصلی',
		    'id' => 'header_text_2',
		    'type' => 'textarea_small',
	    ));

	    $cmb->add_group_field($general_options, array(
		    'name' => 'متن فوتر',
		    'id' => 'header_text_3',
		    'type' => 'textarea_small',
	    ));

	    $faq_options = $cmb->add_field(array(
		    'id' => 'faq_options',
		    'type' => 'group',
		    'description' => __('تنظیمات سوالات متداول', 'cmb2'),
		    'repeatable' => false, // use false if you want non-repeatable group
		    'options' => array(
			    'group_title' => __('تنظیمات سوالات متداول', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
			    'sortable' => true,
			    'closed' => true, // true to have the groups closed by default
		    ),
	    ));
	    $cmb->add_group_field($faq_options, array(
		    'name' => 'تعداد آفست',
		    'id' => 'offset_count',
		    'type' => 'text',
	    ));

	    $social_media = $cmb->add_field(array(
		    'id' => 'social_media',
		    'type' => 'group',
		    'description' => __('سوشال مدیا', 'cmb2'),
		    'repeatable' => false, // use false if you want non-repeatable group
		    'options' => array(
			    'group_title' => __('تنظیمات شبکه های اجتماعی', 'cmb2'), // since version 1.1.4, {#} gets replaced by row number
			    'sortable' => true,
			    'closed' => true, // true to have the groups closed by default
		    ),
	    ));
	    $cmb->add_group_field($social_media, array(
		    'name' => 'تلگرام',
		    'id' => 'telegram_url',
		    'type' => 'text_url',
	    ));
	    $cmb->add_group_field($social_media, array(
		    'name' => 'اینستاگرام',
		    'id' => 'instagram_url',
		    'type' => 'text_url',
	    ));
	    $cmb->add_group_field($social_media, array(
		    'name' => 'توییتر',
		    'id' => 'twitter_url',
		    'type' => 'text_url',
	    ));
	    $cmb->add_group_field($social_media, array(
		    'name' => 'فیسبوک',
		    'id' => 'facebook_url',
		    'type' => 'text_url',
	    ));

    }
    /**
     * Register settings notices for display
     *
     * @param int $object_id Option key
     * @param array $updated Array of updated fields
     * @return void
     * @since  0.1.0
     */
    public function settings_notices($object_id, $updated)
    {
        if ($object_id !== $this->key || empty($updated)) {
            return;
        }
        add_settings_error($this->key . '-notices', '', __('Settings updated.', 'medicalprefix'), 'updated');
        settings_errors($this->key . '-notices');
    }

    /**
     * Public getter method for retrieving protected/private variables
     * @param string $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     * @since  0.1.0
     */
    public function __get($field)
    {
        // Allowed fields to retrieve
        if (in_array($field, array('key', 'metabox_id', 'title', 'options_page'), true)) {
            return $this->{$field};
        }
        throw new Exception('Invalid property: ' . $field);
    }
}

/**
 * Helper function to get/return the Medicalprefix_Admin object
 * @return Medicalprefix_Admin object
 * @since  0.1.0
 */
function pystrtupprefix_admin()
{
    return Medicalprefix_Admin::get_instance();
}

/**
 * Wrapper function around cmb2_get_option
 * @param string $key Options array key
 * @return mixed        Option value
 * @since  0.1.0
 */
function medicalprefix_get_option($key = '')
{
    return cmb2_get_option(pystrtupprefix_admin()->key, $key);
}

// Get it started
pystrtupprefix_admin();
