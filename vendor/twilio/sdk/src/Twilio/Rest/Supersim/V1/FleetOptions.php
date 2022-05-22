<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Supersim\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class FleetOptions {
    /**
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the resource
     * @param bool $dataEnabled Defines whether SIMs in the Fleet are capable of
     *                          using data connectivity
     * @param int $dataLimit The total data usage (download and upload combined) in
     *                       Megabytes that each Sim resource assigned to the Fleet
     *                       resource can consume
     * @param bool $commandsEnabled Deprecated
     * @param string $commandsUrl Deprecated
     * @param string $commandsMethod Deprecated
     * @param string $ipCommandsUrl The URL that will receive a webhook when a
     *                              Super SIM in the Fleet is used to send an IP
     *                              Command from your device
     * @param string $ipCommandsMethod A string representing the HTTP method to use
     *                                 when making a request to `ip_commands_url`
     * @param bool $smsCommandsEnabled Defines whether SIMs in the Fleet are
     *                                 capable of sending and receiving
     *                                 machine-to-machine SMS via Commands
     * @param string $smsCommandsUrl The URL that will receive a webhook when a
     *                               Super SIM in the Fleet is used to send an SMS
     *                               from your device to the SMS Commands number
     * @param string $smsCommandsMethod A string representing the HTTP method to
     *                                  use when making a request to
     *                                  `sms_commands_url`
     * @return CreateFleetOptions Options builder
     */
    public static function create(string $uniqueName = Values::NONE, bool $dataEnabled = Values::NONE, int $dataLimit = Values::NONE, bool $commandsEnabled = Values::NONE, string $commandsUrl = Values::NONE, string $commandsMethod = Values::NONE, string $ipCommandsUrl = Values::NONE, string $ipCommandsMethod = Values::NONE, bool $smsCommandsEnabled = Values::NONE, string $smsCommandsUrl = Values::NONE, string $smsCommandsMethod = Values::NONE): CreateFleetOptions {
        return new CreateFleetOptions($uniqueName, $dataEnabled, $dataLimit, $commandsEnabled, $commandsUrl, $commandsMethod, $ipCommandsUrl, $ipCommandsMethod, $smsCommandsEnabled, $smsCommandsUrl, $smsCommandsMethod);
    }

    /**
     * @param string $networkAccessProfile The SID or unique name of the Network
     *                                     Access Profile of the Fleet
     * @return ReadFleetOptions Options builder
     */
    public static function read(string $networkAccessProfile = Values::NONE): ReadFleetOptions {
        return new ReadFleetOptions($networkAccessProfile);
    }

    /**
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the resource
     * @param string $networkAccessProfile The SID or unique name of the Network
     *                                     Access Profile of the Fleet
     * @param string $commandsUrl Deprecated
     * @param string $commandsMethod Deprecated
     * @param string $ipCommandsUrl The URL that will receive a webhook when a
     *                              Super SIM in the Fleet is used to send an IP
     *                              Command from your device
     * @param string $ipCommandsMethod A string representing the HTTP method to use
     *                                 when making a request to `ip_commands_url`
     * @param string $smsCommandsUrl The URL that will receive a webhook when a
     *                               Super SIM in the Fleet is used to send an SMS
     *                               from your device to the SMS Commands number
     * @param string $smsCommandsMethod A string representing the HTTP method to
     *                                  use when making a request to
     *                                  `sms_commands_url`
     * @return UpdateFleetOptions Options builder
     */
    public static function update(string $uniqueName = Values::NONE, string $networkAccessProfile = Values::NONE, string $commandsUrl = Values::NONE, string $commandsMethod = Values::NONE, string $ipCommandsUrl = Values::NONE, string $ipCommandsMethod = Values::NONE, string $smsCommandsUrl = Values::NONE, string $smsCommandsMethod = Values::NONE): UpdateFleetOptions {
        return new UpdateFleetOptions($uniqueName, $networkAccessProfile, $commandsUrl, $commandsMethod, $ipCommandsUrl, $ipCommandsMethod, $smsCommandsUrl, $smsCommandsMethod);
    }
}

class CreateFleetOptions extends Options {
    /**
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the resource
     * @param bool $dataEnabled Defines whether SIMs in the Fleet are capable of
     *                          using data connectivity
     * @param int $dataLimit The total data usage (download and upload combined) in
     *                       Megabytes that each Sim resource assigned to the Fleet
     *                       resource can consume
     * @param bool $commandsEnabled Deprecated
     * @param string $commandsUrl Deprecated
     * @param string $commandsMethod Deprecated
     * @param string $ipCommandsUrl The URL that will receive a webhook when a
     *                              Super SIM in the Fleet is used to send an IP
     *                              Command from your device
     * @param string $ipCommandsMethod A string representing the HTTP method to use
     *                                 when making a request to `ip_commands_url`
     * @param bool $smsCommandsEnabled Defines whether SIMs in the Fleet are
     *                                 capable of sending and receiving
     *                                 machine-to-machine SMS via Commands
     * @param string $smsCommandsUrl The URL that will receive a webhook when a
     *                               Super SIM in the Fleet is used to send an SMS
     *                               from your device to the SMS Commands number
     * @param string $smsCommandsMethod A string representing the HTTP method to
     *                                  use when making a request to
     *                                  `sms_commands_url`
     */
    public function __construct(string $uniqueName = Values::NONE, bool $dataEnabled = Values::NONE, int $dataLimit = Values::NONE, bool $commandsEnabled = Values::NONE, string $commandsUrl = Values::NONE, string $commandsMethod = Values::NONE, string $ipCommandsUrl = Values::NONE, string $ipCommandsMethod = Values::NONE, bool $smsCommandsEnabled = Values::NONE, string $smsCommandsUrl = Values::NONE, string $smsCommandsMethod = Values::NONE) {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['dataEnabled'] = $dataEnabled;
        $this->options['dataLimit'] = $dataLimit;
        $this->options['commandsEnabled'] = $commandsEnabled;
        $this->options['commandsUrl'] = $commandsUrl;
        $this->options['commandsMethod'] = $commandsMethod;
        $this->options['ipCommandsUrl'] = $ipCommandsUrl;
        $this->options['ipCommandsMethod'] = $ipCommandsMethod;
        $this->options['smsCommandsEnabled'] = $smsCommandsEnabled;
        $this->options['smsCommandsUrl'] = $smsCommandsUrl;
        $this->options['smsCommandsMethod'] = $smsCommandsMethod;
    }

    /**
     * An application-defined string that uniquely identifies the resource. It can be used in place of the resource's `sid` in the URL to address the resource.
     *
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the resource
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * Defines whether SIMs in the Fleet are capable of using 2G/3G/4G/LTE/CAT-M data connectivity. Defaults to `true`.
     *
     * @param bool $dataEnabled Defines whether SIMs in the Fleet are capable of
     *                          using data connectivity
     * @return $this Fluent Builder
     */
    public function setDataEnabled(bool $dataEnabled): self {
        $this->options['dataEnabled'] = $dataEnabled;
        return $this;
    }

    /**
     * The total data usage (download and upload combined) in Megabytes that each Sim resource assigned to the Fleet resource can consume during a billing period (normally one month). Value must be between 1MB (1) and 2TB (2,000,000). Defaults to 1GB (1,000).
     *
     * @param int $dataLimit The total data usage (download and upload combined) in
     *                       Megabytes that each Sim resource assigned to the Fleet
     *                       resource can consume
     * @return $this Fluent Builder
     */
    public function setDataLimit(int $dataLimit): self {
        $this->options['dataLimit'] = $dataLimit;
        return $this;
    }

    /**
     * Deprecated. Use `sms_commands_enabled` instead. Defines whether SIMs in the Fleet are capable of sending and receiving machine-to-machine SMS via Commands. Defaults to `true`.
     *
     * @param bool $commandsEnabled Deprecated
     * @return $this Fluent Builder
     */
    public function setCommandsEnabled(bool $commandsEnabled): self {
        $this->options['commandsEnabled'] = $commandsEnabled;
        return $this;
    }

    /**
     * Deprecated. Use `sms_commands_url` instead. The URL that will receive a webhook when a Super SIM in the Fleet is used to send an SMS from your device to the Commands number. Your server should respond with an HTTP status code in the 200 range; any response body will be ignored.
     *
     * @param string $commandsUrl Deprecated
     * @return $this Fluent Builder
     */
    public function setCommandsUrl(string $commandsUrl): self {
        $this->options['commandsUrl'] = $commandsUrl;
        return $this;
    }

    /**
     * Deprecated. Use `sms_commands_method` instead. A string representing the HTTP method to use when making a request to `commands_url`. Can be one of `POST` or `GET`. Defaults to `POST`.
     *
     * @param string $commandsMethod Deprecated
     * @return $this Fluent Builder
     */
    public function setCommandsMethod(string $commandsMethod): self {
        $this->options['commandsMethod'] = $commandsMethod;
        return $this;
    }

    /**
     * The URL that will receive a webhook when a Super SIM in the Fleet is used to send an IP Command from your device to a special IP address. Your server should respond with an HTTP status code in the 200 range; any response body will be ignored.
     *
     * @param string $ipCommandsUrl The URL that will receive a webhook when a
     *                              Super SIM in the Fleet is used to send an IP
     *                              Command from your device
     * @return $this Fluent Builder
     */
    public function setIpCommandsUrl(string $ipCommandsUrl): self {
        $this->options['ipCommandsUrl'] = $ipCommandsUrl;
        return $this;
    }

    /**
     * A string representing the HTTP method to use when making a request to `ip_commands_url`. Can be one of `POST` or `GET`. Defaults to `POST`.
     *
     * @param string $ipCommandsMethod A string representing the HTTP method to use
     *                                 when making a request to `ip_commands_url`
     * @return $this Fluent Builder
     */
    public function setIpCommandsMethod(string $ipCommandsMethod): self {
        $this->options['ipCommandsMethod'] = $ipCommandsMethod;
        return $this;
    }

    /**
     * Defines whether SIMs in the Fleet are capable of sending and receiving machine-to-machine SMS via Commands. Defaults to `true`.
     *
     * @param bool $smsCommandsEnabled Defines whether SIMs in the Fleet are
     *                                 capable of sending and receiving
     *                                 machine-to-machine SMS via Commands
     * @return $this Fluent Builder
     */
    public function setSmsCommandsEnabled(bool $smsCommandsEnabled): self {
        $this->options['smsCommandsEnabled'] = $smsCommandsEnabled;
        return $this;
    }

    /**
     * The URL that will receive a webhook when a Super SIM in the Fleet is used to send an SMS from your device to the SMS Commands number. Your server should respond with an HTTP status code in the 200 range; any response body will be ignored.
     *
     * @param string $smsCommandsUrl The URL that will receive a webhook when a
     *                               Super SIM in the Fleet is used to send an SMS
     *                               from your device to the SMS Commands number
     * @return $this Fluent Builder
     */
    public function setSmsCommandsUrl(string $smsCommandsUrl): self {
        $this->options['smsCommandsUrl'] = $smsCommandsUrl;
        return $this;
    }

    /**
     * A string representing the HTTP method to use when making a request to `sms_commands_url`. Can be one of `POST` or `GET`. Defaults to `POST`.
     *
     * @param string $smsCommandsMethod A string representing the HTTP method to
     *                                  use when making a request to
     *                                  `sms_commands_url`
     * @return $this Fluent Builder
     */
    public function setSmsCommandsMethod(string $smsCommandsMethod): self {
        $this->options['smsCommandsMethod'] = $smsCommandsMethod;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Supersim.V1.CreateFleetOptions ' . $options . ']';
    }
}

class ReadFleetOptions extends Options {
    /**
     * @param string $networkAccessProfile The SID or unique name of the Network
     *                                     Access Profile of the Fleet
     */
    public function __construct(string $networkAccessProfile = Values::NONE) {
        $this->options['networkAccessProfile'] = $networkAccessProfile;
    }

    /**
     * The SID or unique name of the Network Access Profile that controls which cellular networks the Fleet's SIMs can connect to.
     *
     * @param string $networkAccessProfile The SID or unique name of the Network
     *                                     Access Profile of the Fleet
     * @return $this Fluent Builder
     */
    public function setNetworkAccessProfile(string $networkAccessProfile): self {
        $this->options['networkAccessProfile'] = $networkAccessProfile;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Supersim.V1.ReadFleetOptions ' . $options . ']';
    }
}

class UpdateFleetOptions extends Options {
    /**
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the resource
     * @param string $networkAccessProfile The SID or unique name of the Network
     *                                     Access Profile of the Fleet
     * @param string $commandsUrl Deprecated
     * @param string $commandsMethod Deprecated
     * @param string $ipCommandsUrl The URL that will receive a webhook when a
     *                              Super SIM in the Fleet is used to send an IP
     *                              Command from your device
     * @param string $ipCommandsMethod A string representing the HTTP method to use
     *                                 when making a request to `ip_commands_url`
     * @param string $smsCommandsUrl The URL that will receive a webhook when a
     *                               Super SIM in the Fleet is used to send an SMS
     *                               from your device to the SMS Commands number
     * @param string $smsCommandsMethod A string representing the HTTP method to
     *                                  use when making a request to
     *                                  `sms_commands_url`
     */
    public function __construct(string $uniqueName = Values::NONE, string $networkAccessProfile = Values::NONE, string $commandsUrl = Values::NONE, string $commandsMethod = Values::NONE, string $ipCommandsUrl = Values::NONE, string $ipCommandsMethod = Values::NONE, string $smsCommandsUrl = Values::NONE, string $smsCommandsMethod = Values::NONE) {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['networkAccessProfile'] = $networkAccessProfile;
        $this->options['commandsUrl'] = $commandsUrl;
        $this->options['commandsMethod'] = $commandsMethod;
        $this->options['ipCommandsUrl'] = $ipCommandsUrl;
        $this->options['ipCommandsMethod'] = $ipCommandsMethod;
        $this->options['smsCommandsUrl'] = $smsCommandsUrl;
        $this->options['smsCommandsMethod'] = $smsCommandsMethod;
    }

    /**
     * An application-defined string that uniquely identifies the resource. It can be used in place of the resource's `sid` in the URL to address the resource.
     *
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the resource
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The SID or unique name of the Network Access Profile that will control which cellular networks the Fleet's SIMs can connect to.
     *
     * @param string $networkAccessProfile The SID or unique name of the Network
     *                                     Access Profile of the Fleet
     * @return $this Fluent Builder
     */
    public function setNetworkAccessProfile(string $networkAccessProfile): self {
        $this->options['networkAccessProfile'] = $networkAccessProfile;
        return $this;
    }

    /**
     * Deprecated. Use `sms_commands_url` instead. The URL that will receive a webhook when a Super SIM in the Fleet is used to send an SMS from your device to the Commands number. Your server should respond with an HTTP status code in the 200 range; any response body will be ignored.
     *
     * @param string $commandsUrl Deprecated
     * @return $this Fluent Builder
     */
    public function setCommandsUrl(string $commandsUrl): self {
        $this->options['commandsUrl'] = $commandsUrl;
        return $this;
    }

    /**
     * Deprecated. Use `sms_commands_method` instead. A string representing the HTTP method to use when making a request to `commands_url`. Can be one of `POST` or `GET`. Defaults to `POST`.
     *
     * @param string $commandsMethod Deprecated
     * @return $this Fluent Builder
     */
    public function setCommandsMethod(string $commandsMethod): self {
        $this->options['commandsMethod'] = $commandsMethod;
        return $this;
    }

    /**
     * The URL that will receive a webhook when a Super SIM in the Fleet is used to send an IP Command from your device to a special IP address. Your server should respond with an HTTP status code in the 200 range; any response body will be ignored.
     *
     * @param string $ipCommandsUrl The URL that will receive a webhook when a
     *                              Super SIM in the Fleet is used to send an IP
     *                              Command from your device
     * @return $this Fluent Builder
     */
    public function setIpCommandsUrl(string $ipCommandsUrl): self {
        $this->options['ipCommandsUrl'] = $ipCommandsUrl;
        return $this;
    }

    /**
     * A string representing the HTTP method to use when making a request to `ip_commands_url`. Can be one of `POST` or `GET`. Defaults to `POST`.
     *
     * @param string $ipCommandsMethod A string representing the HTTP method to use
     *                                 when making a request to `ip_commands_url`
     * @return $this Fluent Builder
     */
    public function setIpCommandsMethod(string $ipCommandsMethod): self {
        $this->options['ipCommandsMethod'] = $ipCommandsMethod;
        return $this;
    }

    /**
     * The URL that will receive a webhook when a Super SIM in the Fleet is used to send an SMS from your device to the SMS Commands number. Your server should respond with an HTTP status code in the 200 range; any response body will be ignored.
     *
     * @param string $smsCommandsUrl The URL that will receive a webhook when a
     *                               Super SIM in the Fleet is used to send an SMS
     *                               from your device to the SMS Commands number
     * @return $this Fluent Builder
     */
    public function setSmsCommandsUrl(string $smsCommandsUrl): self {
        $this->options['smsCommandsUrl'] = $smsCommandsUrl;
        return $this;
    }

    /**
     * A string representing the HTTP method to use when making a request to `sms_commands_url`. Can be one of `POST` or `GET`. Defaults to `POST`.
     *
     * @param string $smsCommandsMethod A string representing the HTTP method to
     *                                  use when making a request to
     *                                  `sms_commands_url`
     * @return $this Fluent Builder
     */
    public function setSmsCommandsMethod(string $smsCommandsMethod): self {
        $this->options['smsCommandsMethod'] = $smsCommandsMethod;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Supersim.V1.UpdateFleetOptions ' . $options . ']';
    }
}