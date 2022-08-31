<?php

namespace RouterOsAPI\Commands\IP;

use RouterOsAPI\Talker\Talker;
use RouterOsAPI\Commands\IP\Address,
    RouterOsAPI\Commands\IP\Hotspot\Hotspot,
    RouterOsAPI\Commands\IP\Pool,
    RouterOsAPI\Commands\IP\DNS,
    RouterOsAPI\Commands\IP\Firewall\Firewall,
    RouterOsAPI\Commands\IP\Accounting,
    RouterOsAPI\Commands\IP\ARP,
    RouterOsAPI\Commands\IP\DHCPClient,
    RouterOsAPI\Commands\IP\DHCPServer,
    RouterOsAPI\Commands\IP\DHCPRelay,
    RouterOsAPI\Commands\IP\Route,
    RouterOsAPI\Commands\IP\Service,
    RouterOsAPI\Commands\IP\WebProxy;

/**
 * Description of IP
 *
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	 Libraries
 */
class IP {

    /**
     *
     * @var type array
     */
    private $talker;

    function __construct(Talker $talker) {
        $this->talker = $talker;
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\Address
     * @return \RouterOsAPI\Commands\IP\Address
     */
    public function address() {
        return new Address($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\Hotspot\Hotspot
     * @return \RouterOsAPI\Commands\IP\Hotspot\Hotspot
     */
    public function hotspot() {
        return new Hotspot($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\Pool
     * @return \RouterOsAPI\Commands\IP\Pool
     */
    public function pool() {
        return new Pool($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\DNS
     * @return \RouterOsAPI\Commands\IP\DNS
     */
    public function DNS() {
        return new DNS($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\Firewall\Firewall
     * @return \RouterOsAPI\Commands\IP\Firewall\Firewall
     */
    public function firewall() {
        return new Firewall($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\Accounting
     * @return \RouterOsAPI\Commands\IP\Accounting
     */
    public function accounting() {
        return new Accounting($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\ARP
     * @return \RouterOsAPI\Commands\IP\ARP
     */
    public function ARP() {
        return new ARP($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\DHCPClient
     * @return \RouterOsAPI\Commands\IP\DHCPClient
     */
    public function DHCPClient() {
        return new DHCPClient($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\DHCPRelay
     * @return \RouterOsAPI\Commands\IP\DHCPRelay
     */
    public function DHCPRelay() {
        return new DHCPRelay($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\DHCPServer
     * @return \RouterOsAPI\Commands\IP\DHCPServer
     */
    public function DHCPServer() {
        return new DHCPServer($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\Route
     * @return \RouterOsAPI\Commands\IP\Route
     */
    public function route() {
        return new Route($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\Service
     * @return \RouterOsAPI\Commands\IP\Service
     */
    public function service() {
        return new Service($this->talker);
    }

    /**
     * This method is use for call instantiate object of class
     * \RouterOsAPI\Commands\IP\WebProxy
     * @return \RouterOsAPI\Commands\IP\WebProxy
     */
    public function proxy() {
        return new WebProxy($this->talker);
    }

}
