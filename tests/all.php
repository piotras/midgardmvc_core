<?php
/**
 * @package midgardmvc_core
 * @author The Midgard Project, http://www.midgard-project.org
 * @copyright The Midgard Project, http://www.midgard-project.org
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'midgardmvc_core_tests_all::main');
}

require_once('PHPUnit/Framework.php');
require_once('PHPUnit/TextUI/TestRunner.php');

require_once(dirname(__FILE__) . '/../../tests/helpers.php');

class midgardmvc_core_tests_all
{   
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }
 
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Midgard MVC Core');
        
        $tests = midgardmvc_core_tests_helpers::get_tests(__FILE__, __CLASS__, array('dispatch_routes.php'));
        foreach ($tests as $test)
        {
            $suite->addTestSuite($test);
        }
 
        return $suite;
    }
}
 
if (PHPUnit_MAIN_METHOD == 'midgardmvc_core_tests_all::main')
{
    midgardmvc_core_tests_all::main();
}
?>
