<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticTestConfigBundle\Integration;

use Mautic\PluginBundle\Integration\AbstractIntegration;

class TestConfigIntegration extends AbstractIntegration
{
    public function getName()
    {
        return 'TestConfig';
    }

    /**
     * Return's authentication method such as oauth2, oauth1a, key, etc.
     *
     * @return string
     */
    public function getAuthenticationType()
    {
        // Just use none for now and I'll build in "basic" later
        return 'none';
    }


    /**
     * Return array of key => label elements that will be converted to inputs to
     * obtain from the user.
     *
     * @return array
     */
    public function getRequiredKeyFields()
    {
        return [
            'TestConfig_string1' => 'mautic.integration.testconfig.string1',
            'TestConfig_string2' => 'mautic.integration.testconfig.string2',
        ];
    }
    public function getSecretKeys()
    {
        return [
            'TestConfig_Password' => 'mautic.integration.testconfig.password',
        ];
    }

    /**
* return array for mapping
* 'key'  => ['type' => 'string', 'label' => "field name", 'required' => true | false ]
*
*  @return array
*/
  public function getAvailableLeadFields($settings = [])
  {
    return [
      'firstmapping'  => ['type' => 'string', 'label' => "1st mapping", 'required' => true ],
      'lastmapping'   => ['type' => 'string', 'label' => "2nd mapping", 'required' => false ],
    ];
  }
}
