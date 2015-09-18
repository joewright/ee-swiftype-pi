<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
    'pi_name'         => 'Swiftype',
    'pi_version'      => '1.0.0',
    'pi_author'       => 'Joe Wright',
    'pi_author_url'   => 'http://github.com/joewright/ee-swiftype-pi',
    'pi_description'  => 'Tags for Swiftype snippets https://swiftype.com/',
    'pi_usage'        => Swiftype::usage()
);

class Swiftype {
    public $return_data = "swag";

    public function js_snippet()
    {
        $st_key = ee()->TMPL->fetch_param('st_key');
        return "<script>(function(w,d,t,u,n,s,e){w['SwiftypeObject']=n;w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments);};s=d.createElement(t); e=d.getElementsByTagName(t)[0];s.async=1;s.src=u;e.parentNode.insertBefore(s,e); })(window,document,'script','//s.swiftypecdn.com/install/v2/st.js','_st'); _st('install','".$st_key."','2.0.0');</script>";
    }

    public function search_input()
    {
        return "<form> <fieldset> <input type=\"text\" class=\"st-default-search-input\"> </fieldset> </form>";
    }

    public function search_results()
    {
        return "<div class=\"st-search-container\"></div>";
    }

    public static function usage()
    {
        ob_start(); ?>
        This plugin contains snippets for using Swiftype on your EE website.

        <!-- search input -->
        {exp:swiftype:search_input}

        <!-- search results -->
        {exp:swiftype:search_results}

        <!-- js snippet... don't forget to include the key! -->
        {exp:swiftype:js_snippet st_key="my-st-key"}
<?php 
        $buffer = ob_get_contents();
        ob_end_clean();

        return $buffer;
    }
}
/* End of file pi.swiftype.php */
/* Location: ./system/expressionengine/third_party/swiftype/pi.swiftype.php */