<?php
namespace RestApis;


/**
 * Class Factory
 * @property  $exchanges \RestApis\Metadata
 */
class Factory
{

    /**
     * @var array $instances
     */
    private $instances = [];
    protected $apiKey;
    protected $apiVersion;


    /**
     * Factory constructor.
     * @param string $apiKey
     * @param int $apiVersion
     */
    public function __construct($apiKey, $apiVersion = 1)
    {
        $this->apiKey = $apiKey;
        $this->apiVersion = $apiVersion;
    }

    /**
     * @param $className
     * @return mixed
     */
    protected function getInstance($className)
    {
        if (!isset($this->instances[$className])) {
            $this->instances[$className] = new $className($this->apiKey, $this->apiVersion);
        }

        return $this->instances[$className];
    }


    /**
     * @return \RestApis\CryptoMarketData\Metadata\Exchanges
     */
    public function exchanges()
    {
        $className = 'RestApis\\CryptoMarketData\\Metadata\\Exchanges';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\CryptoMarketData\Metadata\Assets
     */
    public function assets()
    {
        $className = 'RestApis\\CryptoMarketData\\Metadata\\Assets';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\Metadata\Symbols
     */
    public function symbols()
    {
        $className = 'RestApis\\CryptoMarketData\\Metadata\\Symbols';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\ExchangeRates\SpecificRate
     */
    public function specificRate()
    {
        $className = 'RestApis\\CryptoMarketData\\ExchangeRates\\SpecificRate';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\ExchangeRates\AllCurrentRates
     */
    public function allCurrentRates()
    {
        $className = 'RestApis\\CryptoMarketData\\ExchangeRates\\AllCurrentRates';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\ExchangeRates\SpecificRateInExchange
     */
    public function specificRateInExchange()
    {
        $className = 'RestApis\\CryptoMarketData\\ExchangeRates\\SpecificRateInExchange';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\ExchangeRates\AllCurrentRatesInExchange
     */
    public function allCurrentRatesInExchange()
    {
        $className = 'RestApis\\CryptoMarketData\\ExchangeRates\\AllCurrentRatesInExchange';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\OHLCV\ListAllPeriods
     */
    public function listAllPeriodsOHLCV()
    {
        $className = 'RestApis\\CryptoMarketData\\OHLCV\\ListAllPeriods';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\OHLCV\LatestData
     */
    public function latestDataOHLCV()
    {
        $className = 'RestApis\\CryptoMarketData\\OHLCV\\LatestData';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\OHLCV\HistoricalData
     */
    public function historicalDataOHLCV()
    {
        $className = 'RestApis\\CryptoMarketData\\OHLCV\\HistoricalData';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\Trades\LatestData
     */
    public function latestDataTrades()
    {
        $className = 'RestApis\\CryptoMarketData\\Trades\\LatestData';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\Trades\LatestDataBySymbol
     */
    public function latestDataBySymbolTrades()
    {
        $className = 'RestApis\\CryptoMarketData\\Trades\\LatestDataBySymbol';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\Trades\HistoricalData
     */
    public function historicalDataTrades()
    {
        $className = 'RestApis\\CryptoMarketData\\Trades\\HistoricalData';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\Quotes\LatestData
     */
    public function latestDataQuotes()
    {
        $className = 'RestApis\\CryptoMarketData\\Quotes\\LatestData';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\Quotes\HistoricalData
     */
    public function historicalDataQuotes()
    {
        $className = 'RestApis\\CryptoMarketData\\Quotes\\HistoricalData';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\CryptoMarketData\Arbitrage\Arbitrage
     */
    public function arbitrage()
    {
        $className = 'RestApis\\CryptoMarketData\\Arbitrage\\Arbitrage';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\BlockchainAPI\Chain
     */
    public function blockChainApiBtcChain() {

        $className = 'RestApis\\Blockchain\\BTC\\BlockchainAPI\\Chain';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\BlockchainAPI\BlockHash
     */
    public function blockChainApiBtcBlockHash() {

        $className = 'RestApis\\Blockchain\\BTC\\BlockchainAPI\\BlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\BlockchainAPI\BlockHeight
     */
    public function blockChainApiBtcBlockHeight() {

        $className = 'RestApis\\Blockchain\\BTC\\BlockchainAPI\\BlockHeight';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\BlockchainAPI\LatestBlock
     */
    public function blockChainApiBtcLatestBlock() {

        $className = 'RestApis\\Blockchain\\BTC\\BlockchainAPI\\LatestBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\AddressAPI\Address
     */
    public function addressApiBtcAddress() {

        $className = 'RestApis\\Blockchain\\BTC\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\AddressAPI\MultisigAddress
     */
    public function addressApiBtcMultisigAddress() {

        $className = 'RestApis\\Blockchain\\BTC\\AddressAPI\\MultisigAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\AddressAPI\GenerateAddress
     */
    public function addressApiBtcGenerateAddress() {

        $className = 'RestApis\\Blockchain\\BTC\\AddressAPI\\GenerateAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\AddressAPI\AddressTransactions
     */
    public function addressApiBtcAddressTransactions() {

        $className = 'RestApis\\Blockchain\\BTC\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\CreateWallet
     */
    public function walletApiBtcCreateAddress() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\CreateWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\ListWallets
     */
    public function walletApiBtcListWallets() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\ListWallets';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\GetWallet
     */
    public function walletApiBtcGetWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\GetWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\AddAddressToWallet
     */
    public function walletApiBtcAddAddressToWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\AddAddressToWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\GenerateAddressInWallet
     */
    public function walletApiBtcGenerateAddressInWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\GenerateAddressInWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\RemoveAddressFromWallet
     */
    public function walletApiBtcRemoveAddressFromWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\RemoveAddressFromWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\DeleteWallet
     */
    public function walletApiBtcDeleteWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\DeleteWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\TransactionsTxid
     */
    public function transactionApiBtcTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\TransactionsBlock
     */
    public function transactionApiBtcTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\UnconfirmedTransactions
     */
    public function transactionApiBtcUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\DecodeRawTransaction
     */
    public function transactionApiBtcDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\CreateTransaction
     */
    public function transactionApiBtcCreateTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\SignTransaction
     */
    public function transactionApiBtcSignTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\SendTransaction
     */
    public function transactionApiBtcSendTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\NewTransaction
     */
    public function transactionApiBtcNewTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\NewTransactionHdWallet
     */
    public function transactionApiBtcNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionApi\TransactionsFee
     */
    public function transactionApiBtcNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionApi\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingBtcCreatePayment() {

        $className = 'RestApis\\Blockchain\\BTC\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\PaymentForwarding\ListPayments
     */
    public function paymentForwardingBtcListPayment() {

        $className = 'RestApis\\Blockchain\\BTC\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingBtcListOfPastForward() {

        $className = 'RestApis\\Blockchain\\BTC\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingBtcDeletePayment() {

        $className = 'RestApis\\Blockchain\\BTC\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WebhookNotification\CreateNewBlockWebhook
     */
    public function webhookBtcCreateNewBlock() {

        $className = 'RestApis\\Blockchain\\BTC\\WebhookNotification\\CreateNewBlockWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WebhookNotification\CreateConfirmedTransactionWebhook
     */
    public function webhookBtcCreateConfirmedTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\WebhookNotification\\CreateConfirmedTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookBtcCreateAddressTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookBtcCreateTransactionConfirmations() {

        $className = 'RestApis\\Blockchain\\BTC\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WebhookNotification\ListWebhooks
     */
    public function webhookBtcListWebhooks() {

        $className = 'RestApis\\Blockchain\\BTC\\WebhookNotification\\ListWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WebhookNotification\DeleteWebhooks
     */
    public function webhookBtcDeleteWebhooks() {

        $className = 'RestApis\\Blockchain\\BTC\\WebhookNotification\\DeleteWebhooks';
        return $this->getInstance($className);
    }








    /**
     * @return \RestApis\Blockchain\LTC\BlockchainAPI\Chain
     */
    public function blockChainApiLtcChain() {

        $className = 'RestApis\\Blockchain\\LTC\\BlockchainAPI\\Chain';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\BlockchainAPI\BlockHash
     */
    public function blockChainApiLtcBlockHash() {

        $className = 'RestApis\\Blockchain\\LTC\\BlockchainAPI\\BlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\BlockchainAPI\BlockHeight
     */
    public function blockChainApiLtcBlockHeight() {

        $className = 'RestApis\\Blockchain\\LTC\\BlockchainAPI\\BlockHeight';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\BlockchainAPI\LatestBlock
     */
    public function blockChainApiLtcLatestBlock() {

        $className = 'RestApis\\Blockchain\\LTC\\BlockchainAPI\\LatestBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\AddressAPI\Address
     */
    public function addressApiLtcAddress() {

        $className = 'RestApis\\Blockchain\\LTC\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\AddressAPI\MultisigAddress
     */
    public function addressApiLtcMultisigAddress() {

        $className = 'RestApis\\Blockchain\\LTC\\AddressAPI\\MultisigAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\AddressAPI\GenerateAddress
     */
    public function addressApiLtcGenerateAddress() {

        $className = 'RestApis\\Blockchain\\LTC\\AddressAPI\\GenerateAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\AddressAPI\AddressTransactions
     */
    public function addressApiLtcAddressTransactions() {

        $className = 'RestApis\\Blockchain\\LTC\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\CreateWallet
     */
    public function walletApiLtcCreateAddress() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\CreateWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\ListWallets
     */
    public function walletApiLtcListWallets() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\ListWallets';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\GetWallet
     */
    public function walletApiLtcGetWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\GetWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\AddAddressToWallet
     */
    public function walletApiLtcAddAddressToWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\AddAddressToWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\GenerateAddressInWallet
     */
    public function walletApiLtcGenerateAddressInWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\GenerateAddressInWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\RemoveAddressFromWallet
     */
    public function walletApiLtcRemoveAddressFromWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\RemoveAddressFromWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\DeleteWallet
     */
    public function walletApiLtcDeleteWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\DeleteWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\TransactionsTxid
     */
    public function transactionApiLtcTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\TransactionsBlock
     */
    public function transactionApiLtcTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\UnconfirmedTransactions
     */
    public function transactionApiLtcUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\DecodeRawTransaction
     */
    public function transactionApiLtcDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\CreateTransaction
     */
    public function transactionApiLtcCreateTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\SignTransaction
     */
    public function transactionApiLtcSignTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\SendTransaction
     */
    public function transactionApiLtcSendTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\NewTransaction
     */
    public function transactionApiLtcNewTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\NewTransactionHdWallet
     */
    public function transactionApiLtcNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionApi\TransactionsFee
     */
    public function transactionApiLtcNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionApi\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingLtcCreatePayment() {

        $className = 'RestApis\\Blockchain\\LTC\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\PaymentForwarding\ListPayments
     */
    public function paymentForwardingLtcListPayment() {

        $className = 'RestApis\\Blockchain\\LTC\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingLtcListOfPastForward() {

        $className = 'RestApis\\Blockchain\\LTC\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingLtcDeletePayment() {

        $className = 'RestApis\\Blockchain\\LTC\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WebhookNotification\CreateNewBlockWebhook
     */
    public function webhookLtcCreateNewBlock() {

        $className = 'RestApis\\Blockchain\\LTC\\WebhookNotification\\CreateNewBlockWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WebhookNotification\CreateConfirmedTransactionWebhook
     */
    public function webhookLtcCreateConfirmedTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\WebhookNotification\\CreateConfirmedTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookLtcCreateAddressTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookLtcCreateTransactionConfirmations() {

        $className = 'RestApis\\Blockchain\\LTC\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WebhookNotification\ListWebhooks
     */
    public function webhookLtcListWebhooks() {

        $className = 'RestApis\\Blockchain\\LTC\\WebhookNotification\\ListWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WebhookNotification\DeleteWebhooks
     */
    public function webhookLtcDeleteWebhooks() {

        $className = 'RestApis\\Blockchain\\LTC\\WebhookNotification\\DeleteWebhooks';
        return $this->getInstance($className);
    }







    /**
     * @return \RestApis\Blockchain\BCH\BlockchainAPI\Chain
     */
    public function blockChainApiBchChain() {

        $className = 'RestApis\\Blockchain\\BCH\\BlockchainAPI\\Chain';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\BlockchainAPI\BlockHash
     */
    public function blockChainApiBchBlockHash() {

        $className = 'RestApis\\Blockchain\\BCH\\BlockchainAPI\\BlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\BlockchainAPI\BlockHeight
     */
    public function blockChainApiBchBlockHeight() {

        $className = 'RestApis\\Blockchain\\BCH\\BlockchainAPI\\BlockHeight';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\BlockchainAPI\LatestBlock
     */
    public function blockChainApiBchLatestBlock() {

        $className = 'RestApis\\Blockchain\\BCH\\BlockchainAPI\\LatestBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\AddressAPI\Address
     */
    public function addressApiBchAddress() {

        $className = 'RestApis\\Blockchain\\BCH\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\AddressAPI\MultisigAddress
     */
    public function addressApiBchMultisigAddress() {

        $className = 'RestApis\\Blockchain\\BCH\\AddressAPI\\MultisigAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\AddressAPI\GenerateAddress
     */
    public function addressApiBchGenerateAddress() {

        $className = 'RestApis\\Blockchain\\BCH\\AddressAPI\\GenerateAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\AddressAPI\AddressTransactions
     */
    public function addressApiBchAddressTransactions() {

        $className = 'RestApis\\Blockchain\\BCH\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\CreateWallet
     */
    public function walletApiBchCreateAddress() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\CreateWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\ListWallets
     */
    public function walletApiBchListWallets() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\ListWallets';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\GetWallet
     */
    public function walletApiBchGetWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\GetWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\AddAddressToWallet
     */
    public function walletApiBchAddAddressToWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\AddAddressToWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\GenerateAddressInWallet
     */
    public function walletApiBchGenerateAddressInWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\GenerateAddressInWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\RemoveAddressFromWallet
     */
    public function walletApiBchRemoveAddressFromWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\RemoveAddressFromWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\DeleteWallet
     */
    public function walletApiBchDeleteWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\DeleteWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\TransactionsTxid
     */
    public function transactionApiBchTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\TransactionsBlock
     */
    public function transactionApiBchTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\UnconfirmedTransactions
     */
    public function transactionApiBchUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\DecodeRawTransaction
     */
    public function transactionApiBchDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\CreateTransaction
     */
    public function transactionApiBchCreateTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\SignTransaction
     */
    public function transactionApiBchSignTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\SendTransaction
     */
    public function transactionApiBchSendTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\NewTransaction
     */
    public function transactionApiBchNewTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\NewTransactionHdWallet
     */
    public function transactionApiBchNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionApi\TransactionsFee
     */
    public function transactionApiBchNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionApi\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingBchCreatePayment() {

        $className = 'RestApis\\Blockchain\\BCH\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\PaymentForwarding\ListPayments
     */
    public function paymentForwardingBchListPayment() {

        $className = 'RestApis\\Blockchain\\BCH\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingBchListOfPastForward() {

        $className = 'RestApis\\Blockchain\\BCH\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingBchDeletePayment() {

        $className = 'RestApis\\Blockchain\\BCH\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WebhookNotification\CreateNewBlockWebhook
     */
    public function webhookBchCreateNewBlock() {

        $className = 'RestApis\\Blockchain\\BCH\\WebhookNotification\\CreateNewBlockWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WebhookNotification\CreateConfirmedTransactionWebhook
     */
    public function webhookBchCreateConfirmedTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\WebhookNotification\\CreateConfirmedTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookBchCreateAddressTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookBchCreateTransactionConfirmations() {

        $className = 'RestApis\\Blockchain\\BCH\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WebhookNotification\ListWebhooks
     */
    public function webhookBchListWebhooks() {

        $className = 'RestApis\\Blockchain\\BCH\\WebhookNotification\\ListWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WebhookNotification\DeleteWebhooks
     */
    public function webhookBchDeleteWebhooks() {

        $className = 'RestApis\\Blockchain\\BCH\\WebhookNotification\\DeleteWebhooks';
        return $this->getInstance($className);
    }









    /**
     * @return \RestApis\Blockchain\DOGE\BlockchainAPI\Chain
     */
    public function blockChainApiDogeChain() {

        $className = 'RestApis\\Blockchain\\DOGE\\BlockchainAPI\\Chain';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\BlockchainAPI\BlockHash
     */
    public function blockChainApiDogeBlockHash() {

        $className = 'RestApis\\Blockchain\\DOGE\\BlockchainAPI\\BlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\BlockchainAPI\BlockHeight
     */
    public function blockChainApiDogeBlockHeight() {

        $className = 'RestApis\\Blockchain\\DOGE\\BlockchainAPI\\BlockHeight';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\BlockchainAPI\LatestBlock
     */
    public function blockChainApiDogeLatestBlock() {

        $className = 'RestApis\\Blockchain\\DOGE\\BlockchainAPI\\LatestBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\AddressAPI\Address
     */
    public function addressApiDogeAddress() {

        $className = 'RestApis\\Blockchain\\DOGE\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\AddressAPI\MultisigAddress
     */
    public function addressApiDogeMultisigAddress() {

        $className = 'RestApis\\Blockchain\\DOGE\\AddressAPI\\MultisigAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\AddressAPI\GenerateAddress
     */
    public function addressApiDogeGenerateAddress() {

        $className = 'RestApis\\Blockchain\\DOGE\\AddressAPI\\GenerateAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\AddressAPI\AddressTransactions
     */
    public function addressApiDogeAddressTransactions() {

        $className = 'RestApis\\Blockchain\\DOGE\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\CreateWallet
     */
    public function walletApiDogeCreateAddress() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\CreateWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\ListWallets
     */
    public function walletApiDogeListWallets() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\ListWallets';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\GetWallet
     */
    public function walletApiDogeGetWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\GetWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\AddAddressToWallet
     */
    public function walletApiDogeAddAddressToWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\AddAddressToWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\GenerateAddressInWallet
     */
    public function walletApiDogeGenerateAddressInWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\GenerateAddressInWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\RemoveAddressFromWallet
     */
    public function walletApiDogeRemoveAddressFromWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\RemoveAddressFromWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\DeleteWallet
     */
    public function walletApiDogeDeleteWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\DeleteWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\TransactionsTxid
     */
    public function transactionApiDogeTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\TransactionsBlock
     */
    public function transactionApiDogeTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\UnconfirmedTransactions
     */
    public function transactionApiDogeUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\DecodeRawTransaction
     */
    public function transactionApiDogeDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\CreateTransaction
     */
    public function transactionApiDogeCreateTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\SignTransaction
     */
    public function transactionApiDogeSignTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\SendTransaction
     */
    public function transactionApiDogeSendTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\NewTransaction
     */
    public function transactionApiDogeNewTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\NewTransactionHdWallet
     */
    public function transactionApiDogeNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionApi\TransactionsFee
     */
    public function transactionApiDogeNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionApi\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingDogeCreatePayment() {

        $className = 'RestApis\\Blockchain\\DOGE\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\PaymentForwarding\ListPayments
     */
    public function paymentForwardingDogeListPayment() {

        $className = 'RestApis\\Blockchain\\DOGE\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingDogeListOfPastForward() {

        $className = 'RestApis\\Blockchain\\DOGE\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingDogeDeletePayment() {

        $className = 'RestApis\\Blockchain\\DOGE\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WebhookNotification\CreateNewBlockWebhook
     */
    public function webhookDogeCreateNewBlock() {

        $className = 'RestApis\\Blockchain\\DOGE\\WebhookNotification\\CreateNewBlockWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WebhookNotification\CreateConfirmedTransactionWebhook
     */
    public function webhookDogeCreateConfirmedTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\WebhookNotification\\CreateConfirmedTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookDogeCreateAddressTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookDogeCreateTransactionConfirmations() {

        $className = 'RestApis\\Blockchain\\DOGE\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WebhookNotification\ListWebhooks
     */
    public function webhookDogeListWebhooks() {

        $className = 'RestApis\\Blockchain\\DOGE\\WebhookNotification\\ListWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WebhookNotification\DeleteWebhooks
     */
    public function webhookDogeDeleteWebhooks() {

        $className = 'RestApis\\Blockchain\\DOGE\\WebhookNotification\\DeleteWebhooks';
        return $this->getInstance($className);
    }









    /**
     * @return \RestApis\Blockchain\DASH\BlockchainAPI\Chain
     */
    public function blockChainApiDashChain() {

        $className = 'RestApis\\Blockchain\\DASH\\BlockchainAPI\\Chain';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\BlockchainAPI\BlockHash
     */
    public function blockChainApiDashBlockHash() {

        $className = 'RestApis\\Blockchain\\DASH\\BlockchainAPI\\BlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\BlockchainAPI\BlockHeight
     */
    public function blockChainApiDashBlockHeight() {

        $className = 'RestApis\\Blockchain\\DASH\\BlockchainAPI\\BlockHeight';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\BlockchainAPI\LatestBlock
     */
    public function blockChainApiDashLatestBlock() {

        $className = 'RestApis\\Blockchain\\DASH\\BlockchainAPI\\LatestBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\AddressAPI\Address
     */
    public function addressApiDashAddress() {

        $className = 'RestApis\\Blockchain\\DASH\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\AddressAPI\MultisigAddress
     */
    public function addressApiDashMultisigAddress() {

        $className = 'RestApis\\Blockchain\\DASH\\AddressAPI\\MultisigAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\AddressAPI\GenerateAddress
     */
    public function addressApiDashGenerateAddress() {

        $className = 'RestApis\\Blockchain\\DASH\\AddressAPI\\GenerateAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\AddressAPI\AddressTransactions
     */
    public function addressApiDashAddressTransactions() {

        $className = 'RestApis\\Blockchain\\DASH\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\CreateWallet
     */
    public function walletApiDashCreateAddress() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\CreateWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\ListWallets
     */
    public function walletApiDashListWallets() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\ListWallets';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\GetWallet
     */
    public function walletApiDashGetWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\GetWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\AddAddressToWallet
     */
    public function walletApiDashAddAddressToWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\AddAddressToWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\GenerateAddressInWallet
     */
    public function walletApiDashGenerateAddressInWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\GenerateAddressInWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\RemoveAddressFromWallet
     */
    public function walletApiDashRemoveAddressFromWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\RemoveAddressFromWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\DeleteWallet
     */
    public function walletApiDashDeleteWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\DeleteWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\TransactionsTxid
     */
    public function transactionApiDashTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\TransactionsBlock
     */
    public function transactionApiDashTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\UnconfirmedTransactions
     */
    public function transactionApiDashUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\DecodeRawTransaction
     */
    public function transactionApiDashDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\CreateTransaction
     */
    public function transactionApiDashCreateTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\SignTransaction
     */
    public function transactionApiDashSignTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\SendTransaction
     */
    public function transactionApiDashSendTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\NewTransaction
     */
    public function transactionApiDashNewTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\NewTransactionHdWallet
     */
    public function transactionApiDashNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionApi\TransactionsFee
     */
    public function transactionApiDashNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionApi\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingDashCreatePayment() {

        $className = 'RestApis\\Blockchain\\DASH\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\PaymentForwarding\ListPayments
     */
    public function paymentForwardingDashListPayment() {

        $className = 'RestApis\\Blockchain\\DASH\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingDashListOfPastForward() {

        $className = 'RestApis\\Blockchain\\DASH\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingDashDeletePayment() {

        $className = 'RestApis\\Blockchain\\DASH\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WebhookNotification\CreateNewBlockWebhook
     */
    public function webhookDashCreateNewBlock() {

        $className = 'RestApis\\Blockchain\\DASH\\WebhookNotification\\CreateNewBlockWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WebhookNotification\CreateConfirmedTransactionWebhook
     */
    public function webhookDashCreateConfirmedTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\WebhookNotification\\CreateConfirmedTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookDashCreateAddressTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookDashCreateTransactionConfirmations() {

        $className = 'RestApis\\Blockchain\\DASH\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WebhookNotification\ListWebhooks
     */
    public function webhookDashListWebhooks() {

        $className = 'RestApis\\Blockchain\\DASH\\WebhookNotification\\ListWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WebhookNotification\DeleteWebhooks
     */
    public function webhookDashDeleteWebhooks() {

        $className = 'RestApis\\Blockchain\\DASH\\WebhookNotification\\DeleteWebhooks';
        return $this->getInstance($className);
    }










    /**
     * @return \RestApis\Blockchain\ETH\BlockchainAPI\Chain
     */
    public function blockChainApiEthChain() {

        $className = 'RestApis\\Blockchain\\ETH\\BlockchainAPI\\Chain';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\BlockchainAPI\BlockHash
     */
    public function blockChainApiEthBlockHash() {

        $className = 'RestApis\\Blockchain\\ETH\\BlockchainAPI\\BlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\BlockchainAPI\BlockHeight
     */
    public function blockChainApiEthBlockHeight() {

        $className = 'RestApis\\Blockchain\\ETH\\BlockchainAPI\\BlockHeight';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\BlockchainAPI\LatestBlock
     */
    public function blockChainApiEthLatestBlock() {

        $className = 'RestApis\\Blockchain\\ETH\\BlockchainAPI\\LatestBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\AddressAPI\Address
     */
    public function addressApiEthAddress() {

        $className = 'RestApis\\Blockchain\\ETH\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\AddressAPI\AddressTransactions
     */
    public function addressApiEthAddressTransactions() {
        $className = 'RestApis\\Blockchain\\ETH\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\AddressAPI\GenerateAddress
     */
    public function addressApiEthGenerateAddress() {
        $className = 'RestApis\\Blockchain\\ETH\\AddressAPI\\GenerateAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\AddressAPI\GenerateAccount
     */
    public function addressApiEthGenerateAccount() {
        $className = 'RestApis\\Blockchain\\ETH\\AddressAPI\\GenerateAccount';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\AddressAPI\Nonce
     */
    public function addressApiEthNonce() {
        $className = 'RestApis\\Blockchain\\ETH\\AddressAPI\\Nonce';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\TransactionsHash
     */
    public function transactionApiEthTransactionHash() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\TransactionsHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\TransactionsIndexByIndex
     */
    public function transactionApiEthTransactionsIndexByIndex() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\TransactionsIndexByIndex';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\TransactionsIndexByBlockNumber
     */
    public function transactionApiEthTransactionsIndexByBlockNumber() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\TransactionsIndexByBlockNumber';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\TransactionsIndexByBlockHash
     */
    public function transactionApiEthTransactionsIndexByBlockHash() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\TransactionsIndexByBlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\CreateTransaction
     */
    public function transactionApiEthCreateTransaction() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\LocalSignTransaction
     */
    public function transactionApiEthLocalSignTransaction() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\LocalSignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\PushRawTransaction
     */
    public function transactionApiEthPushRawTransaction() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\PushRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\EstimateGasSmartContract
     */
    public function transactionApiEthEstimateTransactionGas() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\EstimateGasSmartContract';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\PendingTransactions
     */
    public function transactionApiEthPendingTransactions() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\PendingTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\QueuedTransactions
     */
    public function transactionApiEthQueuedTransactions() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\QueuedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionApi\TransactionsFee
     */
    public function transactionApiEthTransactionFee() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionApi\\TransactionsFee';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\ETH\ContractAPI\EstimateGasSmartContract
     */
    public function contractApiEthEstimateGasSmartContract() {
        $className = 'RestApis\\Blockchain\\ETH\\ContractAPI\\EstimateGasSmartContract';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\ContractAPI\DeploySmartContract
     */
    public function contractApiEthDeploySmartContract() {
        $className = 'RestApis\\Blockchain\\ETH\\ContractAPI\\DeploySmartContract';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TokenAPI\GetTokenBalance
     */
    public function tokenApiEthGetTokenBalance() {
        $className = 'RestApis\\Blockchain\\ETH\\TokenAPI\\GetTokenBalance';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TokenAPI\TokenTransactionsByAddress
     */
    public function tokenApiEthTokenTransactionsByAddress() {
        $className = 'RestApis\\Blockchain\\ETH\\TokenAPI\\TokenTransactionsByAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TokenAPI\GetAddressTokenTransfer
     */
    public function tokenApiEthGetAddressTokenTransfers() {
        $className = 'RestApis\\Blockchain\\ETH\\TokenAPI\\GetAddressTokenTransfer';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingEtcCreatePayment() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingEtcDeletePayment() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\ListPayments
     */
    public function paymentForwardingEtcListPayments() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingEtcListOfPastPayments() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingEtcDeletePayments() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\CreateNewBlockWebhook
     */
    public function webhookEthCreateNewBlock() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\CreateNewBlockWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\CreateConfirmedTransactionWebhook
     */
    public function webhookEthCreateConfirmedTransaction() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\CreateConfirmedTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookEthCreateAddressTransaction() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookEthCreateTransactionConfirmations() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\CreateTokenTransactionWebhook
     */
    public function webhookEthCreateTokenTransaction() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\CreateTokenTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\ListWebhooks
     */
    public function webhookEthListWebhooks() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\ListWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\DeleteWebhooks
     */
    public function webhookEthDeleteWebhooks() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\DeleteWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\TradingApis\ExchangeAccounts\Account
     */
    public function tradingApisExchangeAccount() {
        $className = 'RestApis\\TradingApis\\ExchangeAccounts\\Account';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\TradingApis\PrivateApis\PrivateApis
     */
    public function tradingApisPrivate() {
        $className = 'RestApis\\TradingApis\\PrivateApis\\PrivateApis';
        return $this->getInstance($className);
    }

}