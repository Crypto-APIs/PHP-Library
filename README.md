# Cryptoapis.io

[CryptoAPIs](https://cryptoapis.io/) SDK for all Exchanges, Bitcoin, Litecoin, Bitcoin Cash, Doge Coin, Dash and Ethereum endpoints. You can get API key [here](https://dashboard.cryptoapis.io/register).

## Table of Contents

-   [Install](#install)
-   [How to use](#howtouse)
-   [Functions](#functions)
-   [License](#license)

## Install

```sh
$ composer require cryptoapis.io/php-sdk
$ composer install
```

## How to use

```php
<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use \RestApis\Blockchain\Constants;

/*
 * You can get api key from https://dashboard.cryptoapis.io/register
 */
$apiKey = 'YOUR_API_KEY';

/*create instance*/
$instance = new \RestApis\Factory($apiKey);

/*
 * https://docs.cryptoapis.io/#list-all-exchanges
 *
 */

$exchanges = $instance->exchanges()->get(0,50);
print_r($result);
``` 

Check out [CryptoAPIs documentation](https://docs.cryptoapis.io) for more information.

## Functions

```php

/*
 * https://docs.cryptoapis.io/#list-all-exchanges
 */
 
 $exchanges = $instance->exchanges()->get(0,50);


/*
 * https://docs.cryptoapis.io/#list-all-assets
 */
 
 $assets = $instance->assets()->get(0,50);


/*
 * https://docs.cryptoapis.io/#list-all-symbols
 */
 
 $symbols = $instance->symbols()->get(0,50);


/*
 * https://docs.cryptoapis.io/#get-specific-rate
 */
 
$specificRate = $instance->specificRate()->get('5b1ea92e584bf50020130616','5b1ea92e584bf50020130615');

/*
 * https://docs.cryptoapis.io/#get-all-current-rates
 */
 
$allCurrentRate = $instance->allCurrentRates()->get('5b1ea92e584bf50020130616');

/*
 * https://docs.cryptoapis.io/#get-all-current-rates
 */
 
$specificRateInExchange = $instance->specificRateInExchange()->get();


/*
 * https://docs.cryptoapis.io/#get-all-current-rates-in-a-specific-exchange
 */
 
$allCurrentRatesInExchange = $instance->allCurrentRatesInExchange()->get();


/*
 * https://docs.cryptoapis.io/#list-all-periods
 */
 
 $listAllPeriods = $instance->listAllPeriodsOHLCV()->get();


/*
 * https://docs.cryptoapis.io/#latest-data
 */
 
 $latestDataOHLCV = $instance->latestDataOHLCV()->get();

/*
 * https://docs.cryptoapis.io/#historical-data
 */
 
 $historicalDataOHLCV = $instance->historicalDataOHLCV()->get();

/*
 * https://docs.cryptoapis.io/#trades-latest-data
 */
 $trades = $instance->latestDataTrades()->get(10);

/*
 * https://docs.cryptoapis.io/#trades-latest-data-by-symbol
 */
 $tradesBySymbol = $instance->latestDataBySymbolTrades()->get();

/*
 * https://docs.cryptoapis.io/#trades-historical-data
 */
 
 $historicalData = $instance->historicalDataTrades()->get();

/*
 * https://docs.cryptoapis.io/#quotes-latest-data
 */
 $quotes = $instance->latestDataQuotes()->get(10);

/*
 * https://docs.cryptoapis.io/#quotes-historical-data
 */
 
 $quotesHistoricalData = $instance->historicalDataQuotes()->get('SYMBOL_ID_STRING');

/*
 * https://docs.cryptoapis.io/#arbitrage
 */
$arbitrage = $instance->arbitrage()->get();

/*
 * https://docs.cryptoapis.io/rest-apis/crypto-market-data-apis/index#order-book-snapshot-by-symbol
 */
$arbitrage = $instance->snapshotBySymbol()->get('SYMBOL_ID_STRING');

/*
 * https://docs.cryptoapis.io/#btc-blockchain-chain-endpoint
 */
 
$info = $instance->blockChainApiBtcChain()->get(Constants::$BTC_TESTNET);

/*
 * https://docs.cryptoapis.io/#btc-blockchain-block-hash-endpoint
 * $result = $instance->blockChainApiBtcBlockHash()->get('mainnet','0000000000000000001ca87bd09c2fc80a0ef3966c6473553b118583e0a73381');
 */

/*
 * https://docs.cryptoapis.io/#btc-blockchain-block-height-endpoint
 * $result = $instance->blockChainApiBtcBlockHeight()->get(Constants::$BTC_MAINNET, 546903);
 */

/*
 * https://docs.cryptoapis.io/#btc-latest-block-endpoint
 * $result = $instance->blockChainApiBtcLatestBlock()->get(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/#btc-address-info-endpoint
 * $result = $instance->addressApiBtcAddress()->get(Constants::$BTC_TESTNET, 'n4VQ5YdHf7hLQ2gWQYYrcxoE5B7nWuDFNF');
 */

/*
 * https://docs.cryptoapis.io/#btc-address-multisig-info-endpoint
 * $result = $instance->addressApiBtcMultisigAddress()->get(Constants::$BTC_TESTNET,'n4VQ5YdHf7hLQ2gWQYYrcxoE5B7nWuDFNF',100);
 */

/*
 * https://docs.cryptoapis.io/#btc-address-generate-address-endpoint
 * $result = $instance->addressApiBtcGenerateAddress()->create(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/#btc-address-transactions-endpoint
 * $result = $instance->addressApiBtcAddressTransactions()->get(Constants::$BTC_TESTNET,'mtFYoSowT3i649wnBDYjCjewenh8AuofQb');
 */

/*
 * https://docs.cryptoapis.io/#btc-address-transactions-endpoint
 * 
 * $addresses = [
               "2MuLVwmhmxM6RzNBZ347sW9xyRtJoHf8v77",
               "n3jYBjCzgGNydQwf83Hz6GBzGBhMkKfgL1",
               "2NDhzMt2D9ZxXapbuq567WGeWP7NuDN81cg"
               ]
 * 
 * 
 * $result = $instance->addressApiBtcMultipleAddressesInfo()->get(Constants::$BTC_TESTNET, $addresses);
 */


/*
 * https://docs.cryptoapis.io/#btc-wallet-create-wallet-endpoint
 * $result = $instance->walletApiBtcCreateAddress()->create(Constants::$BTC_TESTNET,'testWalletName',['mtFYoSowT3i649wnBDYjCjewenh8AuofQb']);
 * $result = $instance->walletApiBtcCreateAddress()->createHd(Constants::$BTC_TESTNET,'testWalletName','sdfs23423424df',2);
 */

/*
 * https://docs.cryptoapis.io/#btc-wallet-list-wallets-endpoint
 * $result = $instance->walletApiBtcListWallets()->get(Constants::$BTC_TESTNET);
 * $result = $instance->walletApiBtcListWallets()->getHd(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/#btc-wallet-get-wallet-endpoint
 * $result = $instance->walletApiBtcGetWallet()->get(Constants::$BTC_TESTNET,'testWalletName');
 * $result = $instance->walletApiBtcGetWallet()->getHd(Constants::$BTC_TESTNET,'testWalletName');
 */

/*
 * https://docs.cryptoapis.io/#btc-wallet-add-addresses-to-wallet-endpoint
 * $result = $instance->walletApiBtcAddAddressToWallet()->add(Constants::$BTC_TESTNET,'testWalletName',['n4VQ5YdHf7hLQ2gWQYYrcxoE5B7nWuDFNF']);
 */

/*
 * https://docs.cryptoapis.io/#btc-wallet-generate-address-in-wallet-endpoint
 * $result = $instance->walletApiBtcGenerateAddressInWallet()->create(Constants::$BTC_TESTNET,'testWalletName');
 * $result = $instance->walletApiBtcGenerateAddressInWallet()->createHd(Constants::$BTC_TESTNET,'testWalletName','sdfs23423424df',1);
 */

/*
 * https://docs.cryptoapis.io/#btc-wallet-remove-addresses-from-wallet-endpoint
 * $result = $instance->walletApiBtcRemoveAddressFromWallet()->delete(Constants::$BTC_TESTNET,'testWalletName','n4VQ5YdHf7hLQ2gWQYYrcxoE5B7nWuDFNF');
 */

/*
 * https://docs.cryptoapis.io/#btc-wallet-delete-wallet-endpoint
 * $result = $instance->walletApiBtcDeleteWallet()->delete(Constants::$BTC_TESTNET,'testWalletName');
 * $result = $instance->walletApiBtcDeleteWallet()->deleteHd(Constants::$BTC_TESTNET,'testWalletName');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-create-xpub-endpoint
 * $result = $instance->walletApiBtcCreateXPub()->create(Constants::$BTC_TESTNET, $password);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-get-pub-addresses-endpoint
 * $result = $instance->walletApiBtcGetPublicExtendedKeyAddresses()->get($network, $xpub, $index, $limit, $type, $script);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-get-pub-addresses-transactions-endpoint
 * $result = $instance->walletApiBtcGetExtendedPublicKeyTxs()->get($network, $xpub, $index, $limit, $type, $script);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-wallet-import-wallet-endpoint
 * $result = $instance->walletApiBtcImportAddressAsWallet()->import($network, $walletName, $password, $privateKey, $address);
 */

/*
 * https://docs.cryptoapis.io/#btc-transactions-transaction-txid-endpoint
 * $result = $instance->transactionApiBtcTransactionsTxid()->get(Constants::$BTC_TESTNET,'e9ec71e8c695e900942cafb98647862abca10275057f71ea76b464aa6a05c720');
 */


/*
 * https://docs.cryptoapis.io/#btc-transactions-transaction-by-block-endpoint
 * $result = $instance->transactionApiBtcTransactionsBlock()->get(Constants::$BTC_TESTNET,'582495');
 */


/*
 * https://docs.cryptoapis.io/#btc-transactions-unconfirmed-transactions-endpoint
 * $result = $instance->transactionApiBtcUnconfirmedTransactions()->get(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/#btc-transactions-unconfirmed-transactions-endpoint
 * $result = $instance->transactionApiBtcDecodeRawTransaction()->get(Constants::$BTC_TESTNET,'0200000005c1ab663c05cc557f522d55d42734eb3fe7bfacf3737cba5102233b312b0c95590000000000ffffffffbfd5dc9ac3129f2a9788d0ab2c201861790d66ce147bf6ebe8ee44019b69ed790100000000ffffffff2837839555246cc3f0f9374f73030341d641f3beae71eeafb2461f8ba8daa1d40000000000ffffffffbe23166dca2f0b9a24d9704e5e6ecfe3e57265cda29468e68c19644d24e1f1c70000000000ffffffff41994176b4bb3f00bb128a982b907e0a3b139ac02d90253c61815dea3d16f98d0000000000ffffffff0140420f00000000001976a9141a96349a5025735fe18f3e783098e471edbad83388ac00000000');
 */

/*
 *https://docs.cryptoapis.io/#btc-transactions-creating-transactions



$inputs = new \RestApis\Blockchain\BTC\Snippets\Input();
$inputs->add('mtFYoSowT3i649wnBDYjCjewenh8AuofQb', 0.0004);
$inputs->add('mn6GtNFRPwXtW7xJqH8Afck7FbVoRi6NF1',0.00018);

$outputs = new \RestApis\Blockchain\BTC\Snippets\Output();
$outputs->add('mrnWMV41vXivQX9yiY9ACSK5uPo3TfJdv9', 0.0004);

$fee = new \RestApis\Blockchain\BTC\Snippets\Fee();
$fee->set(0.00023141);

$result = $instance->transactionApiBtcCreateTransaction()->create(Constants::$BTC_TESTNET, $inputs, $outputs, $fee);

 */


/*
 * https://docs.cryptoapis.io/#btc-transactions-latest-transactions-endpoint
 * $result = $instance->transactionApiBtcSignTransaction()->create(Constants::$BTC_TESTNET,'0200000007ada38a51acfc69c55f957bff9d16b2d5d896d70f2ef7c9f5119fbf9a185ad2da0000000000ffffffffb36f16e73d1cd8c50ef646d243845a4f29eb7284b05ccff937327b3b23cca4460000000000ffffffff0a6911558351dc6761a723a0c79efe87b4ca2e0b5dc3bb8d8e30fc837055cb0f0000000000fffffffff0e850aaf07a299ec686651734a6aa295a69ff526a39cd9b5d6a3240c2798cd70000000000ffffffff7e2ba9804a9addc194ae9be6c0f8e6162026d8af16d40f0494ae4719eba64efa0200000000ffffffff4636640905aeccf61d4e541914c0e7bb46c2fa6375cc558546acac5e1a2ed43d0100000000ffffffff4fee5568c3fd1546244955589ebd8b4a13b77768f7c9d4d9129347ce4f7c9cff0100000000ffffffff0343b90000000000001976a9147b9a627a184897f10d31d73d87c2eea191d8f50188ac6c020000000000001976a9148bafc8dad0c87025278b4cc1c80ac8d402cb59eb88ac8a1b0800000000001976a914481e003d23566c1789dc9362085c3a0876570c7c88ac00000000',['asdasdasd']);
 */


/*
 * https://docs.cryptoapis.io/#btc-transactions-send-transactions
 * $result = $instance->transactionApiBtcSendTransaction()->create(Constants::$BTC_TESTNET,'02000000012ef6ff4aaa76aaff4bea235df134923a830a89d2fbdea5fdc330c9a42eb920a8010000006a47304402205c44fb58b3eaa907cccb2cac87749f00cb52f0d050d183ebba80d672413b9a540220749c8b53665db9f36d5e760ad627b0e22072a6cf91a5d77d35ac2b95d4c1ea54012102275753690ab58df3c923001e94d407e30b03e60b1f2461729a1dd4f37ebe2469ffffffff02c8320000000000001976a914481e003d23566c1789dc9362085c3a0876570c7c88ac80380100000000001976a9147b9a627a184897f10d31d73d87c2eea191d8f50188ac00000000');
 */

/*
 * https://docs.cryptoapis.io/#btc-transactions-new-transactions
 *
 *

$inputs = new \RestApis\Blockchain\BTC\Snippets\Input();
$inputs->add('mtFYoSowT3i649wnBDYjCjewenh8AuofQb', 0.0004);
$inputs->add('mn6GtNFRPwXtW7xJqH8Afck7FbVoRi6NF1',0.00018);

$outputs = new \RestApis\Blockchain\BTC\Snippets\Output();
$outputs->add('mrnWMV41vXivQX9yiY9ACSK5uPo3TfJdv9', 0.0004);

$fee = new \RestApis\Blockchain\BTC\Snippets\Fee();
$fee->set(0.00023141,'mtFYoSowT3i649wnBDYjCjewenh8AuofQb');

$result = $instance->transactionApiBtcNewTransaction()->create(Constants::$BTC_TESTNET,$inputs, $outputs, $fee, ['cUGddnJmuzfzpWXNwt1SRnQ8GMqZdQ1vg8BtwjG8f275pvExPzaX','cSEjySAREyai8eQhgoqixzmxCeSP8QtbwHxptL8ijofg68ZMjoud','cSEjySAREyai8eQhgoqixzmxCeSP8QtbwHxptL8ijofg68ZMjoud']);

*/

/*
 * https://docs.cryptoapis.io/#btc-transactions-hdwallet-transactions

$outputs = new \RestApis\Blockchain\BTC\Snippets\Output();
$outputs->add('mrnWMV41vXivQX9yiY9ACSK5uPo3TfJdv9', 0.0004);

$fee = new \RestApis\Blockchain\BTC\Snippets\Fee();
$fee->set(0.00023141);

$result = $instance->transactionApiBtcNewTransactionHdWallet()->create(Constants::$BTC_TESTNET,'testWalletName','sdfs23423424df',$outputs, $fee);
 */

/*
 * https://docs.cryptoapis.io/#btc-transactions-fee-endpoint
 * $result = $instance->transactionApiBtcNewTransactionFee()->get(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-refund-transaction
 * $result = $instance->transactionApiBtcRefundTransaction()->refund(Constants::$BTC_TESTNET, $txId, $wif);
 */


/* Only for ETH
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/eth/index#eth-internal-transactions-endpoint
 * $result = $instance->transactionApiEthInternalTransactions()->get(Constants::$ETH_ROPSTEN, $txHash, $limit);
 */

/*BTC based 
 *https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-transactions-size



$inputs = new \RestApis\Blockchain\BTC\Snippets\Input();
$inputs->add('mtFYoSowT3i649wnBDYjCjewenh8AuofQb', 0.0004);
$inputs->add('mn6GtNFRPwXtW7xJqH8Afck7FbVoRi6NF1',0.00018);

$outputs = new \RestApis\Blockchain\BTC\Snippets\Output();
$outputs->add('mrnWMV41vXivQX9yiY9ACSK5uPo3TfJdv9', 0.0004);

$fee = new \RestApis\Blockchain\BTC\Snippets\Fee();
$fee->set(0.00023141);

$result = $instance->transactionApiBtcTransactionSize()->calculate(Constants::$BTC_TESTNET, $inputs, $outputs, $fee);

 */

/*
 * https://docs.cryptoapis.io/#btc-payment-forwarding-create-payment-endpoint
 * $result = $instance->paymentForwardingBtcCreatePayment()->create(Constants::$BTC_TESTNET,'testWalletName','sdfs23423424df','mtFYoSowT3i649wnBDYjCjewenh8AuofQb','mrnWMV41vXivQX9yiY9ACSK5uPo3TfJdv9',6,'http://callback.com');
 */

/*
 * https://docs.cryptoapis.io/#btc-payment-forwarding-list-payment-endpoints
 * $result = $instance->paymentForwardingBtcListPayment()->get(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/#btc-payment-history-list-payment-endpoints
 * $result = $instance->paymentForwardingBtcListOfPastForward()->get(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/#btc-payment-forwarding-delete-payment-endpoints
 * $result = $instance->paymentForwardingBtcDeletePayment()->delete(Constants::$BTC_TESTNET,'UUID');
 */

/*
 * https://docs.cryptoapis.io/#btc-webhooks-create-new-block-webhook-endpoint
 * $result = $instance->webhookBtcCreateNewBlock()->create(Constants::$BTC_TESTNET,'http://myhost');
 */

/*
 * https://docs.cryptoapis.io/#btc-webhooks-create-confirmed-transaction-webhook-endpoint
 * $result = $instance->webhookBtcCreateConfirmedTransaction()->create(Constants::$BTC_TESTNET,'http://localhost','hash',6);
 */

/*
 * https://docs.cryptoapis.io/#btc-webhooks-create-address-transaction-webhook-endpoint
 * $result = $instance->webhookBtcCreateAddressTransaction()->create(Constants::$BTC_TESTNET,'http://localhost','mtFYoSowT3i649wnBDYjCjewenh8AuofQb',6);
 */


/*
 * https://docs.cryptoapis.io/#btc-webhooks-create-transaction-confirmations-webhook-endpoint
 * $result = $instance->webhookBtcCreateTransactionConfirmations()->create(Constants::$BTC_TESTNET, 'http://localhost','mtFYoSowT3i649wnBDYjCjewenh8AuofQb',6);
 */

/*
 * https://docs.cryptoapis.io/#btc-webhooks-list-webhooks-endpoint
 * $result = $instance->webhookBtcListWebhooks()->get(Constants::$BTC_TESTNET);
 */

/*
 * https://docs.cryptoapis.io/#btc-webhooks-delete-webhook-endpoint
 * $result = $instance->webhookBtcDeleteWebhooks()->delete(Constants::$BTC_TESTNET, 'UUID');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-webhooks-delete-all-webhooks-endpoint
 * $result = $instance->webhookBtcDeleteAllWebhooks()->delete(Constants::$BTC_TESTNET');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/exchange-accounts/index#create-account
 * $result = $instance->tradingApisExchangeAccount()->create('binance','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','asdsad');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/exchange-accounts/index#list-all-accounts
 * $result = $instance->tradingApisExchangeAccount()->listAll();
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/exchange-accounts/index#get-account
 * $result = $instance->tradingApisExchangeAccount()->get('ebf4cbbf-3759-4b63-84c1-01bcf508317c');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/exchange-accounts/index#update-account
 * $result = $instance->tradingApisExchangeAccount()->update('ebf4cbbf-3759-4b63-84c1-01bcf508317c','binance','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','asdsad');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/exchange-accounts/index#replace-account
 * $result = $instance->tradingApisExchangeAccount()->replace('ebf4cbbf-3759-4b63-84c1-01bcf508317c','binance','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','fasdfasgeag4gsee4vgsebgse4bbge4sbgsg4segs4e623676rhdht456589857f','asdsad');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/exchange-accounts/index#delete-account
 * $result = $instance->tradingApisExchangeAccount()->delete('ebf4cbbf-3759-4b63-84c1-01bcf508317c');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#list-all-exchanges
 * $result = $instance->tradingApisPrivate()->listAll();
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#balance
 * $result = $instance->tradingApisPrivate()->getBalance('ebf4cbbf-3759-4b63-84c1-01bcf508317c');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#symbols
 * $result = $instance->tradingApisPrivate()->getSymbols('ebf4cbbf-3759-4b63-84c1-01bcf508317c');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#get-deposit-address
 * $result = $instance->tradingApisPrivate()->getDepositAddress('ebf4cbbf-3759-4b63-84c1-01bcf508317c','dasd');
 */


/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#get-my-trades
 * $result = $instance->tradingApisPrivate()->getMyTrades('ebf4cbbf-3759-4b63-84c1-01bcf508317c');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#get-open-orders
 * $result = $instance->tradingApisPrivate()->getOpenOrders('ebf4cbbf-3759-4b63-84c1-01bcf508317c');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#create-order
 * $result = $instance->tradingApisPrivate()->createOrder('ebf4cbbf-3759-4b63-84c1-01bcf508317c','btc/eth','market','buy',123,123);
 */


/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#cancel-order
 * $result = $instance->tradingApisPrivate()->cancelOrder('ebf4cbbf-3759-4b63-84c1-01bcf508317c','asd','btc/eth');
 */


/*
 * https://docs.cryptoapis.io/rest-apis/trading-apis/private-apis/index#withdraw
 * $result = $instance->tradingApisPrivate()->withdraw('account_id','code','123','address');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-address-unconfirmed-transactions-endpoint
 * $result = $instance->addressApiBtcUnconfirmedTransactions()->get(Constants::$BTC_TESTNET,'XeBZBM6V6KKgPGcuqJThPbohU8DjY823Mm');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/bch/index#bch-address-unconfirmed-transactions-endpoint
 * $result = $instance->addressApiBchUnconfirmedTransactions()->get(Constants::$BCH_TESTNET,'bchtest:qpfnjptddkqmqd6nxjt64dh7ntyxhdruyufqymvd5p');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/dash/index#dash-address-unconfirmed-transactions-endpoint
 * $result = $instance->addressApiDashUnconfirmedTransactions()->get(Constants::$DASH_MAINNET,'XeBZBM6V6KKgPGcuqJThPbohU8DjY823Mm');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/doge/index#doge-address-unconfirmed-transactions-endpoint
 * $result = $instance->addressApiDogeUnconfirmedTransactions()->get(Constants::$DOGE_MAINNET,'9sNEXzQciK5rrakA7GFMBGwMcLd7x1kNSN');
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/btc/index#btc-hd-wallet-transactions-size
    $outputs = new \RestApis\Blockchain\BTC\Snippets\Output();
    $outputs->add('mrnWMV41vXivQX9yiY9ACSK5uPo3TfJdv9', 0.0004);

    $fee = new \RestApis\Blockchain\BTC\Snippets\Fee();
    $fee->set(0.00023141);
    $result = $instance->transactionApiBtcTransactionSizeForHDWallet()->calculate(...);
*/

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/bch/index#bch-hd-wallet-transactions-size
 * $result = $instance->transactionApiBchTransactionSizeForHDWallet()->calculate(...);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/dash/index#dash-hd-wallet-transactions-size
 * $result = $instance->transactionApiDashTransactionSizeForHDWallet()->calculate(...);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/doge/index#doge-transactions-hdwallet-transactions
 * $result = $instance->transactionApiDogeTransactionSizeForHDWallet()->calculate(...);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/ltc/index#ltc-hd-wallet-transactions-size
 * $result = $instance->transactionApiLtcTransactionSizeForHDWallet()->calculate(...);
 */

/*
 * https://docs.cryptoapis.io/rest-apis/blockchain-as-a-service-apis/eth/index#eth-transfer-tokens
 * $result = $instance->tokenApiEthTokenTransactionsByAddress()->get(Constants::$ETH_MAINNET,'0x', new \RestApis\Blockchain\ETH\Snippets\Erc20());
 */

```

## License

MIT
