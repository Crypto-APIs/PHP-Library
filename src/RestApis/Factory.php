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
     * @return \RestApis\CryptoMarketData\OrderBook\SnapshotBySymbol
     */
    public function snapshotBySymbol()
    {
        $className = 'RestApis\\CryptoMarketData\\OrderBook\\SnapshotBySymbol';
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
     * @return \RestApis\Blockchain\BTC\AddressAPI\MultipleAddresses
     */
    public function addressApiBtcMultipleAddressesInfo() {

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
     * @return \RestApis\Blockchain\BTC\WalletAPI\CreateXPUB
     */
    public function walletApiBtcCreateXPub() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\CreateXPUB';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\GetExtendedPublicKeyTxs
     */
    public function walletApiBtcGetExtendedPublicKeyTxs() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\GetExtendedPublicKeyTxs';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\GetPublicExtendedKeyAddresses
     */
    public function walletApiBtcGetPublicExtendedKeyAddresses() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\GetPublicExtendedKeyAddresses';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\WalletAPI\ImportAddressAsWallet
     */
    public function walletApiBtcImportAddressAsWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\WalletAPI\\ImportAddressAsWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\TransactionsTxid
     */
    public function transactionApiBtcTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\TransactionsBlock
     */
    public function transactionApiBtcTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\UnconfirmedTransactions
     */
    public function transactionApiBtcUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\DecodeRawTransaction
     */
    public function transactionApiBtcDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\CreateTransaction
     */
    public function transactionApiBtcCreateTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\SignTransaction
     */
    public function transactionApiBtcSignTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\SendTransaction
     */
    public function transactionApiBtcSendTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\NewTransaction
     */
    public function transactionApiBtcNewTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\NewTransactionHdWallet
     */
    public function transactionApiBtcNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\TransactionsFee
     */
    public function transactionApiBtcNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\TransactionSize
     */
    public function transactionApiBtcTransactionSize() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\TransactionSize';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\RefundTransaction
     */
    public function transactionApiBtcRefundTransaction() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\RefundTransaction';
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
     * @return \RestApis\Blockchain\BTC\WebhookNotification\DeleteAllWebhooks
     */
    public function webhookBtcDeleteAllWebhooks() {

        $className = 'RestApis\\Blockchain\\BTC\\WebhookNotification\\DeleteAllWebhooks';
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
     * @return \RestApis\Blockchain\LTC\AddressAPI\MultipleAddresses
     */
    public function addressApiLtcMultipleAddressesInfo() {

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
     * @return \RestApis\Blockchain\LTC\WalletAPI\CreateXPUB
     */
    public function walletApiLtcCreateXPub() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\CreateXPUB';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\GetExtendedPublicKeyTxs
     */
    public function walletApiLtcGetExtendedPublicKeyTxs() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\GetExtendedPublicKeyTxs';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\GetPublicExtendedKeyAddresses
     */
    public function walletApiLtcGetPublicExtendedKeyAddresses() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\GetPublicExtendedKeyAddresses';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\WalletAPI\ImportAddressAsWallet
     */
    public function walletApiLtcImportAddressAsWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\WalletAPI\\ImportAddressAsWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\TransactionsTxid
     */
    public function transactionApiLtcTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\TransactionsBlock
     */
    public function transactionApiLtcTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\UnconfirmedTransactions
     */
    public function transactionApiLtcUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\DecodeRawTransaction
     */
    public function transactionApiLtcDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\CreateTransaction
     */
    public function transactionApiLtcCreateTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\SignTransaction
     */
    public function transactionApiLtcSignTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\SendTransaction
     */
    public function transactionApiLtcSendTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\NewTransaction
     */
    public function transactionApiLtcNewTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\NewTransactionHdWallet
     */
    public function transactionApiLtcNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\TransactionsFee
     */
    public function transactionApiLtcNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\TransactionSize
     */
    public function transactionApiLtcTransactionSize() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\TransactionSize';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\RefundTransaction
     */
    public function transactionApiLtcRefundTransaction() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\RefundTransaction';
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
     * @return \RestApis\Blockchain\LTC\WebhookNotification\DeleteAllWebhooks
     */
    public function webhookLtcDeleteAllWebhooks() {

        $className = 'RestApis\\Blockchain\\LTC\\WebhookNotification\\DeleteAllWebhooks';
        return $this->getInstance($className);
    }






    /**
     * @return \RestApis\Blockchain\BCH\BlockchainAPI\NodeInfo
     */
    public function blockChainApiBchChain() {

        $className = 'RestApis\\Blockchain\\BCH\\BlockchainAPI\\NodeInfo';
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
     * @return \RestApis\Blockchain\BCH\AddressAPI\MultipleAddresses
     */
    public function addressApiBchMultipleAddressesInfo() {

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
     * @return \RestApis\Blockchain\BCH\WalletAPI\CreateXPUB
     */
    public function walletApiBchCreateXPub() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\CreateXPUB';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\GetExtendedPublicKeyTxs
     */
    public function walletApiBchGetExtendedPublicKeyTxs() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\GetExtendedPublicKeyTxs';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\GetPublicExtendedKeyAddresses
     */
    public function walletApiBchGetPublicExtendedKeyAddresses() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\GetPublicExtendedKeyAddresses';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\WalletAPI\ImportAddressAsWallet
     */
    public function walletApiBchImportAddressAsWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\WalletAPI\\ImportAddressAsWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\TransactionsTxid
     */
    public function transactionApiBchTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\TransactionsBlock
     */
    public function transactionApiBchTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\UnconfirmedTransactions
     */
    public function transactionApiBchUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\DecodeRawTransaction
     */
    public function transactionApiBchDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\CreateTransaction
     */
    public function transactionApiBchCreateTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\SignTransaction
     */
    public function transactionApiBchSignTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\SendTransaction
     */
    public function transactionApiBchSendTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\NewTransaction
     */
    public function transactionApiBchNewTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\NewTransactionHdWallet
     */
    public function transactionApiBchNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\TransactionsFee
     */
    public function transactionApiBchNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\TransactionSize
     */
    public function transactionApiBchTransactionSize() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\TransactionSize';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\RefundTransaction
     */
    public function transactionApiBchRefundTransaction() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\RefundTransaction';
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
     * @return \RestApis\Blockchain\BCH\WebhookNotification\DeleteAllWebhooks
     */
    public function webhookBchDeleteAllWebhooks() {

        $className = 'RestApis\\Blockchain\\BCH\\WebhookNotification\\DeleteAllWebhooks';
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
     * @return \RestApis\Blockchain\DOGE\AddressAPI\MultipleAddresses
     */
    public function addressApiDogeMultipleAddressesInfo() {

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
     * @return \RestApis\Blockchain\DOGE\WalletAPI\CreateXPUB
     */
    public function walletApiDogeCreateXPub() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\CreateXPUB';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\GetExtendedPublicKeyTxs
     */
    public function walletApiDogeGetExtendedPublicKeyTxs() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\GetExtendedPublicKeyTxs';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\GetPublicExtendedKeyAddresses
     */
    public function walletApiDogeGetPublicExtendedKeyAddresses() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\GetPublicExtendedKeyAddresses';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\WalletAPI\ImportAddressAsWallet
     */
    public function walletApiDogeImportAddressAsWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\WalletAPI\\ImportAddressAsWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\TransactionsTxid
     */
    public function transactionApiDogeTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\TransactionsBlock
     */
    public function transactionApiDogeTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\UnconfirmedTransactions
     */
    public function transactionApiDogeUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\DecodeRawTransaction
     */
    public function transactionApiDogeDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\CreateTransaction
     */
    public function transactionApiDogeCreateTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\SignTransaction
     */
    public function transactionApiDogeSignTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\SendTransaction
     */
    public function transactionApiDogeSendTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\NewTransaction
     */
    public function transactionApiDogeNewTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\NewTransactionHdWallet
     */
    public function transactionApiDogeNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\TransactionsFee
     */
    public function transactionApiDogeNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\TransactionSize
     */
    public function transactionApiDogeTransactionSize() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\TransactionSize';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\RefundTransaction
     */
    public function transactionApiDogeRefundTransaction() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\RefundTransaction';
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
     * @return \RestApis\Blockchain\DOGE\WebhookNotification\DeleteAllWebhooks
     */
    public function webhookDogeDeleteAllWebhooks() {

        $className = 'RestApis\\Blockchain\\DOGE\\WebhookNotification\\DeleteAllWebhooks';
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
     * @return \RestApis\Blockchain\DASH\AddressAPI\MultipleAddresses
     */
    public function addressApiDashMultipleAddressesInfo() {

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
     * @return \RestApis\Blockchain\DASH\WalletAPI\CreateXPUB
     */
    public function walletApiDashCreateXPub() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\CreateXPUB';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\GetExtendedPublicKeyTxs
     */
    public function walletApiDashGetExtendedPublicKeyTxs() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\GetExtendedPublicKeyTxs';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\GetPublicExtendedKeyAddresses
     */
    public function walletApiDashGetPublicExtendedKeyAddresses() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\GetPublicExtendedKeyAddresses';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\WalletAPI\ImportAddressAsWallet
     */
    public function walletApiDashImportAddressAsWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\WalletAPI\\ImportAddressAsWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\TransactionsTxid
     */
    public function transactionApiDashTransactionsTxid() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\TransactionsBlock
     */
    public function transactionApiDashTransactionsBlock() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\UnconfirmedTransactions
     */
    public function transactionApiDashUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\DecodeRawTransaction
     */
    public function transactionApiDashDecodeRawTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\DecodeRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\CreateTransaction
     */
    public function transactionApiDashCreateTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\SignTransaction
     */
    public function transactionApiDashSignTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\SendTransaction
     */
    public function transactionApiDashSendTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\NewTransaction
     */
    public function transactionApiDashNewTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\NewTransaction';
        return $this->getInstance($className);
    }


    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\NewTransactionHdWallet
     */
    public function transactionApiDashNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\TransactionsFee
     */
    public function transactionApiDashNewTransactionFee() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\TransactionSize
     */
    public function transactionApiDashTransactionSize() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\TransactionSize';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\RefundTransaction
     */
    public function transactionApiDashRefundTransaction() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\RefundTransaction';
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
     * @return \RestApis\Blockchain\DASH\WebhookNotification\DeleteAllWebhooks
     */
    public function webhookDashDeleteAllWebhooks() {

        $className = 'RestApis\\Blockchain\\DASH\\WebhookNotification\\DeleteAllWebhooks';
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
     * @return \RestApis\Blockchain\ETH\AddressAPI\MultipleAddresses
     */
    public function addressApiEthMultipleAddressesInfo() {

        $className = 'RestApis\\Blockchain\\ETH\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\TransactionsHash
     */
    public function transactionApiEthTransactionHash() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\TransactionsHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\TransactionsIndexByIndex
     */
    public function transactionApiEthTransactionsIndexByIndex() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\TransactionsIndexByIndex';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\TransactionsIndexByBlockNumber
     */
    public function transactionApiEthTransactionsIndexByBlockNumber() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\TransactionsIndexByBlockNumber';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\TransactionsIndexByBlockHash
     */
    public function transactionApiEthTransactionsIndexByBlockHash() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\TransactionsIndexByBlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\CreateTransaction
     */
    public function transactionApiEthCreateTransaction() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\LocalSignTransaction
     */
    public function transactionApiEthLocalSignTransaction() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\LocalSignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\PushRawTransaction
     */
    public function transactionApiEthPushRawTransaction() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\PushRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\EstimateTransactionGas
     */
    public function transactionApiEthEstimateTransactionGas() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\EstimateGasSmartContract';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\PendingTransactions
     */
    public function transactionApiEthPendingTransactions() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\PendingTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\QueuedTransactions
     */
    public function transactionApiEthQueuedTransactions() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\QueuedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\TransactionsFee
     */
    public function transactionApiEthTransactionFee() {
        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\RefundTransaction
     */
    public function transactionApiEthRefundTransaction() {

        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\RefundTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TransactionAPI\InternalTransactions
     */
    public function transactionApiEthInternalTransactions() {

        $className = 'RestApis\\Blockchain\\ETH\\TransactionAPI\\InternalTransactions';
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
     * @return \RestApis\Blockchain\ETH\TokenAPI\GetTokenSupplyAndDecimals
     */
    public function tokenApiEthGetTokenSupplyAndDecimals() {
        $className = 'RestApis\\Blockchain\\ETH\\TokenAPI\\GetTokenSupplyAndDecimals';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\TokenAPI\TransferTokens
     */
    public function tokenApiEthTransferTokens() {
        $className = 'RestApis\\Blockchain\\ETH\\TokenAPI\\TransferTokens';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingEthCreatePayment() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingEthDeletePayment() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\ListPayments
     */
    public function paymentForwardingEthListPayments() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingEthListOfPastPayments() {
        $className = 'RestApis\\Blockchain\\ETH\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETH\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingEthDeletePayments() {
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

    /**
     * @return \RestApis\Blockchain\ETH\WebhookNotification\DeleteAllWebhooks
     */
    public function webhookEthDeleteAllWebhooks() {

        $className = 'RestApis\\Blockchain\\ETH\\WebhookNotification\\DeleteAllWebhooks';
        return $this->getInstance($className);
    }










    //ETC

    /**
     * @return \RestApis\Blockchain\ETC\BlockchainAPI\Chain
     */
    public function blockChainApiEtcChain() {

        $className = 'RestApis\\Blockchain\\ETC\\BlockchainAPI\\Chain';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\BlockchainAPI\BlockHash
     */
    public function blockChainApiEtcBlockHash() {

        $className = 'RestApis\\Blockchain\\ETC\\BlockchainAPI\\BlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\BlockchainAPI\BlockHeight
     */
    public function blockChainApiEtcBlockHeight() {

        $className = 'RestApis\\Blockchain\\ETC\\BlockchainAPI\\BlockHeight';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\BlockchainAPI\LatestBlock
     */
    public function blockChainApiEtcLatestBlock() {

        $className = 'RestApis\\Blockchain\\ETC\\BlockchainAPI\\LatestBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\AddressAPI\Address
     */
    public function addressApiEtcAddress() {

        $className = 'RestApis\\Blockchain\\ETC\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\AddressAPI\AddressTransactions
     */
    public function addressApiEtcAddressTransactions() {
        $className = 'RestApis\\Blockchain\\ETC\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\AddressAPI\GenerateAddress
     */
    public function addressApiEtcGenerateAddress() {
        $className = 'RestApis\\Blockchain\\ETC\\AddressAPI\\GenerateAddress';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\AddressAPI\GenerateAccount
     */
    public function addressApiEtcGenerateAccount() {
        $className = 'RestApis\\Blockchain\\ETC\\AddressAPI\\GenerateAccount';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\AddressAPI\Nonce
     */
    public function addressApiEtcNonce() {
        $className = 'RestApis\\Blockchain\\ETC\\AddressAPI\\Nonce';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\AddressAPI\MultipleAddresses
     */
    public function addressApiEtcMultipleAddressesInfo() {

        $className = 'RestApis\\Blockchain\\ETC\\AddressAPI\\MultipleAddresses';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\TransactionsHash
     */
    public function transactionApiEtcTransactionHash() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\TransactionsHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\TransactionsIndexByIndex
     */
    public function transactionApiEtcTransactionsIndexByIndex() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\TransactionsIndexByIndex';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\TransactionsIndexByBlockNumber
     */
    public function transactionApiEtcTransactionsIndexByBlockNumber() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\TransactionsIndexByBlockNumber';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\TransactionsIndexByBlockHash
     */
    public function transactionApiEtcTransactionsIndexByBlockHash() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\TransactionsIndexByBlockHash';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\CreateTransaction
     */
    public function transactionApiEtcCreateTransaction() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\LocalSignTransaction
     */
    public function transactionApiEtcLocalSignTransaction() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\LocalSignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\PushRawTransaction
     */
    public function transactionApiEtcPushRawTransaction() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\PushRawTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\PendingTransactions
     */
    public function transactionApiEtcPendingTransactions() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\PendingTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\QueuedTransactions
     */
    public function transactionApiEtcQueuedTransactions() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\QueuedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\TransactionsFee
     */
    public function transactionApiEtcTransactionFee() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\TransactionsFee';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\RefundTransaction
     */
    public function transactionApiEtcRefundTransaction() {

        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\RefundTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TransactionAPI\EstimateTransactionGas
     */
    public function transactionApiEtcEstimateTransactionGas() {
        $className = 'RestApis\\Blockchain\\ETC\\TransactionAPI\\EstimateGasSmartContract';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\ContractAPI\EstimateGasSmartContract
     */
    public function contractApiEtcEstimateGasSmartContract() {
        $className = 'RestApis\\Blockchain\\ETC\\ContractAPI\\EstimateGasSmartContract';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\ContractAPI\DeploySmartContract
     */
    public function contractApiEtcDeploySmartContract() {
        $className = 'RestApis\\Blockchain\\ETC\\ContractAPI\\DeploySmartContract';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TokenAPI\GetTokenBalance
     */
    public function tokenApiEtcGetTokenBalance() {
        $className = 'RestApis\\Blockchain\\ETC\\TokenAPI\\GetTokenBalance';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TokenAPI\GetTokenSupplyAndDecimals
     */
    public function tokenApiEtcGetTokenSupplyAndDecimals() {
        $className = 'RestApis\\Blockchain\\ETC\\TokenAPI\\GetTokenSupplyAndDecimals';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\TokenAPI\TransferTokens
     */
    public function tokenApiEtcTransferTokens() {
        $className = 'RestApis\\Blockchain\\ETC\\TokenAPI\\TransferTokens';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\PaymentForwarding\CreatePaymentForwarding
     */
    public function paymentForwardingEtcCreatePayment() {
        $className = 'RestApis\\Blockchain\\ETC\\PaymentForwarding\\CreatePaymentForwarding';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingEtcDeletePayment() {
        $className = 'RestApis\\Blockchain\\ETC\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\PaymentForwarding\ListPayments
     */
    public function paymentForwardingEtcListPayments() {
        $className = 'RestApis\\Blockchain\\ETC\\PaymentForwarding\\ListPayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\PaymentForwarding\ListOfPastForward
     */
    public function paymentForwardingEtcListOfPastPayments() {
        $className = 'RestApis\\Blockchain\\ETC\\PaymentForwarding\\ListOfPastForward';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\PaymentForwarding\DeletePayments
     */
    public function paymentForwardingEtcDeletePayments() {
        $className = 'RestApis\\Blockchain\\ETC\\PaymentForwarding\\DeletePayments';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\WebhookNotification\CreateNewBlockWebhook
     */
    public function webhookEtcCreateNewBlock() {

        $className = 'RestApis\\Blockchain\\ETC\\WebhookNotification\\CreateNewBlockWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\WebhookNotification\CreateConfirmedTransactionWebhook
     */
    public function webhookEtcCreateConfirmedTransaction() {

        $className = 'RestApis\\Blockchain\\ETC\\WebhookNotification\\CreateConfirmedTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookEtcCreateAddressTransaction() {

        $className = 'RestApis\\Blockchain\\ETC\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\WebhookNotification\CreateAddressTransactionWebhook
     */
    public function webhookEtcCreateTransactionConfirmations() {

        $className = 'RestApis\\Blockchain\\ETC\\WebhookNotification\\CreateAddressTransactionWebhook';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\WebhookNotification\ListWebhooks
     */
    public function webhookEtcListWebhooks() {

        $className = 'RestApis\\Blockchain\\ETC\\WebhookNotification\\ListWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\WebhookNotification\DeleteWebhooks
     */
    public function webhookEtcDeleteWebhooks() {

        $className = 'RestApis\\Blockchain\\ETC\\WebhookNotification\\DeleteWebhooks';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\ETC\WebhookNotification\DeleteAllWebhooks
     */
    public function webhookEtcDeleteAllWebhooks() {

        $className = 'RestApis\\Blockchain\\ETC\\WebhookNotification\\DeleteAllWebhooks';
        return $this->getInstance($className);
    }












    //Omni layer

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\AddressAPI\Address
     */
    public function addressApiOmniLayerAddress() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\AddressAPI\\Address';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\AddressAPI\AddressTransactions
     */
    public function addressApiOmniLayerAddressTransactions() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\AddressAPI\\AddressTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\BlockchainAPI\NodeInfo
     */
    public function blockchainApiOmniLayerNodeInfo() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\BlockchainAPI\\NodeInfo';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\CreateTransaction
     */
    public function transactionApiOmniLayerCreateTransaction() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\CreateTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\NewTransaction
     */
    public function transactionApiOmniLayerNewTransaction() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\NewTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\NewTransactionHdWallet
     */
    public function transactionApiOmniLayerNewTransactionHdWallet() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\NewTransactionHdWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\SendTransaction
     */
    public function transactionApiOmniLayerSendTransaction() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\SendTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\SignTransaction
     */
    public function transactionApiOmniLayerSignTransaction() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\SignTransaction';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\TransactionsBlock
     */
    public function transactionApiOmniLayerTransactionBlock() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\TransactionsBlock';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\TransactionsPropertyId
     */
    public function transactionApiOmniLayerTransactionPropertyId() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\TransactionsPropertyId';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\TransactionsTxid
     */
    public function transactionApiOmniLayerTransactionTxid() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\TransactionsTxid';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\Layers\OmniLayer\TransactionAPI\UnconfirmedTransactions
     */
    public function transactionApiOmniLayerUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\Layers\\OmniLayer\\TransactionAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\AddressAPI\UnconfirmedTransactions
     */
    public function addressApiBtcUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\BTC\\AddressAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\AddressAPI\UnconfirmedTransactions
     */
    public function addressApiBchUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\BCH\\AddressAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\AddressAPI\UnconfirmedTransactions
     */
    public function addressApiDashUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\DASH\\AddressAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\AddressAPI\UnconfirmedTransactions
     */
    public function addressApiDogeUnconfirmedTransactions() {

        $className = 'RestApis\\Blockchain\\DOGE\\AddressAPI\\UnconfirmedTransactions';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BTC\TransactionAPI\TransactionSizeForHDWallet
     */
    public function transactionApiBtcTransactionSizeForHDWallet() {

        $className = 'RestApis\\Blockchain\\BTC\\TransactionAPI\\TransactionSizeForHDWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\BCH\TransactionAPI\TransactionSizeForHDWallet
     */
    public function transactionApiBchTransactionSizeForHDWallet() {

        $className = 'RestApis\\Blockchain\\BCH\\TransactionAPI\\TransactionSizeForHDWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DASH\TransactionAPI\TransactionSizeForHDWallet
     */
    public function transactionApiDashTransactionSizeForHDWallet() {

        $className = 'RestApis\\Blockchain\\DASH\\TransactionAPI\\TransactionSizeForHDWallet';
        return $this->getInstance($className);
    }

    /**
     * @return \RestApis\Blockchain\DOGE\TransactionAPI\TransactionSizeForHDWallet
     */
    public function transactionApiDogeTransactionSizeForHDWallet() {

        $className = 'RestApis\\Blockchain\\DOGE\\TransactionAPI\\TransactionSizeForHDWallet';
        return $this->getInstance($className);
    }
    /**
     * @return \RestApis\Blockchain\LTC\TransactionAPI\TransactionSizeForHDWallet
     */
    public function transactionApiLtcTransactionSizeForHDWallet() {

        $className = 'RestApis\\Blockchain\\LTC\\TransactionAPI\\TransactionSizeForHDWallet';
        return $this->getInstance($className);
    }

}
