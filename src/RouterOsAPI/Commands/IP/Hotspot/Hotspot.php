<?php

namespace RouterOsAPI\Commands\IP\Hotspot;

use RouterOsAPI\Talker\Talker;
use RouterOsAPI\Commands\IP\Hotspot\Server,
    RouterOsAPI\Commands\IP\Hotspot\ServerProfiles,
    RouterOsAPI\Commands\IP\Hotspot\Users,
    RouterOsAPI\Commands\IP\Hotspot\UserProfile,
    RouterOsAPI\Commands\IP\Hotspot\Hosts,
    RouterOsAPI\Commands\IP\Hotspot\Active,
    RouterOsAPI\Commands\IP\Hotspot\IPBindings,
    RouterOsAPI\Commands\IP\Hotspot\Cookie;

/**
 * Description of Hotspot
 * @author Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright Copyright (c) 2011, Virtual Think Team.
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category Libraries
 */
class Hotspot {

    /**
     *
     * @var Talker
     */
    private $talker;

    function __construct(Talker $talker) {
        $this->talker = $talker;
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\Server
     */
    public function server() {
        return new Server($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\ServerProfiles
     */
    public function serverProfiles() {
        return new ServerProfiles($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\Users
     */
    public function users() {
        return new Users($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\UserProfile
     */
    public function userProfiles() {
        return new UserProfile($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\Active
     */
    public function active() {
        return new Active($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\Hosts
     */
    public function hosts() {
        return new Hosts($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\IPBindings
     */
    public function IPBinding() {
        return new IPBindings($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Hotspot\Cookie
     */
    public function cookie() {
        return new Cookie($this->talker);
    }

}
