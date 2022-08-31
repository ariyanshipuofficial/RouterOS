<?php

namespace RouterOsAPI\Commands\IP\Firewall;

use RouterOsAPI\Talker\Talker;
use RouterOsAPI\Commands\IP\Firewall\Filter,
    RouterOsAPI\Commands\IP\Firewall\NAT,
    RouterOsAPI\Commands\IP\Firewall\Mangle,
    RouterOsAPI\Commands\IP\Firewall\ServicePort,
    RouterOsAPI\Commands\IP\Firewall\Connection,
    RouterOsAPI\Commands\IP\Firewall\AddressList,
    RouterOsAPI\Commands\IP\Firewall\Layer7Protocol;

/**
 * Description of Firewall
 * @author Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright Copyright (c) 2011, Virtual Think Team.
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category Libraries
 */
class Firewall {

    /**
     *
     * @var type array
     */
    private $talker;

    function __construct(Talker $talker) {
        $this->talker = $talker;
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Firewall\Filter
     */
    public function filter() {
        return new Filter($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Firewall\NAT
     */
    public function NAT() {
        return new NAT($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Firewall\Mangle
     */
    public function mangle() {
        return new Mangle($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Firewall\ServicePort
     */
    public function servicePort() {
        return new ServicePort($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Firewall\Connection
     */
    public function connection() {
        return new Connection($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Firewall\AddressList
     */
    public function addressList() {
        return new AddressList($this->talker);
    }

    /**
     * 
     * @return \RouterOsAPI\Commands\IP\Firewall\Layer7Protocol
     */
    public function layer7Protocol() {
        return new Layer7Protocol($this->talker);
    }

}
