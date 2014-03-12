Bitcoin-PHP-API
===============

Implementation in PHP for the Bitcoin RPC API.

You must have bitcoind installed on your server in order to use you can download it here.
http://bitcoin.org/en/download

Getting Started
---------------
To download add the following to your composer.json file.

<pre><code>{
    "require": {
        "mschuett/bitcoin-dev": "dev-master"
    }
}</code></pre>

After running composer install you can start using the api below after including autoload in your application.

<pre><code>require_once __DIR__ . '/vendor/autoload.php'; </code></pre>

To get started include the following code in your project. If you are using another username than bitcoinrpc you can specify after password. If you are not connecting to localhost you can set this after the user paramater. Most people will only need the following however.  <br />

<pre><code>$bitcoind = \Bitcoin\Bitcoin::instance('rpcpassword');</code></pre>

Now you can start interacting with bitcoind. Test it out with the following line of code.<br />


<pre><code>var_dump($bitcoind->getinfo());</code></pre>

Major Contributors
------------
 <a href="https://github.com/haveacigaro">haveacigaro</a>
