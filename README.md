<pre>
 <code>composer require ariyanshipu/router-os</code>
</pre>
br>
<h4></h4>
<pre>
<code>
  <?php

    namespace App\Http\Controllers;
    use MikrotikAPI\Talker\Talker;
    use \MikrotikAPI\Entity\Auth;
    use MikrotikAPI\Commands\IP\Address;
    use MikrotikAPI\Util\DebugDumper;

    class DemoController extends Controller
    {
        public function index()
        {
            $auth = new Auth();
            $auth->setHost("10.20.32.1");
            $auth->setUsername("123");
            $auth->setPassword("123");
            $auth->setDebug(true);


            $talker = new Talker($auth);
            //$filter = new FirewallFilter($talker);
            //$a = $filter->getAll();

            if($talker)
            {
                $ipaddr = new Address($talker);
                $listIP = $ipaddr->getAll();
                DebugDumper::dump($listIP);
            }
            
            return view('demo.index');

        }
    }

</code>
</pre>
