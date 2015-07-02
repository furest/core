<?php
/**
 *    Copyright (C) 2015 Deciso B.V.
 *
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 *
 */

/**
 *
 * Language support, autogenerated file
 *
 */
echo gettext('Enable or disable the proxy service.');
echo gettext('The port number where Squid sends and receives ICP queries to
                    and from neighbor caches. Leave blank to disable (default). The standard UDP port for ICP is 3130.
                ');
echo gettext('Enable access logging.');
echo gettext('Enable store logging.');
echo gettext('Select what to do with X-Forwarded for header.');
echo gettext('Suppress Squid version string info in HTTP headers and HTML error pages.');
echo gettext('Enter the storage size for the local cache (default is 100).');
echo gettext('
                    Enter the number of first-level subdirectories for the local cache (default is 16).');
echo gettext('
                    Enter the number of first-level subdirectories for the local cache (default is 256).');
echo gettext('Enable or disable traffic management.');
echo gettext('Enter the maxium size for downloads in kilobytes (leave empty to disable).');
echo gettext('Enter the maxium size for uploads in kilobytes (leave empty to disable).');
echo gettext('
                    Enter the allowed overall bandtwith in kilobits per second (leave empty to disable).');
echo gettext('
                    Enter the allowed per host bandwidth in kilobits per second (leave empty to disable).');
echo gettext('Select interface(s) the proxy will bind to.');
echo gettext('The port the proxy service will listen to.');
echo gettext('
                    When enabled the subnets of the selected interfaces will be added to the allow access list.');
echo gettext('Select interface(s) the ftp proxy will bind to.');
echo gettext('The port the proxy service will listen to.');
echo gettext('Select Authentication method');
echo gettext('The prompt will be displayed in the autherntication request window.');
echo gettext('The total number of authenticator processes to spawn.');
echo gettext('Select if job is enabled or not');
echo gettext('Enter a filename for storing the blacklist.');
echo gettext('Enter an url to fetch the blacklist from.');
echo gettext('Enter a description to explain what this blacklist is intended for.');
echo gettext('enable IDS');
echo gettext('Select interface(s) to use.');
echo gettext('enable this pipe and it\'s related queues and rules');
echo gettext('Total bandwidth for this pipe');
echo gettext('number of dynamic queues, leave empty for default');
echo gettext('Description to identify this pipe.');
echo gettext('enable this queue and it\'s related rules');
echo gettext('connected pipe for this queue');
echo gettext('Weight of this queue (1..100), used to prioritize within a pipe. (1 is low, 100 is high)');
echo gettext('Description to identify this pipe.');
echo gettext('order in which the rule will be evaluated (lowest first)');
echo gettext('source ip or network, examples 10.0.0.0/24, 10.0.0.1');
echo gettext('source port number or well known name (imap,imaps, http,https,...)');
echo gettext('destination ip or network, examples 10.0.0.0/24, 10.0.0.1');
echo gettext('destination port number or well known name (imap,imaps, http,https,...)');
echo gettext('matches incomming or outgoing packets or both (default)');
echo gettext('target pipe or queue');
echo gettext('Select if job is enabled or not');
echo gettext('Enter the minutes for the job to act, can also be a comma separated list, * (each) or a range (ex. 10,20,30 or 10-30)');
echo gettext('Enter the hours for the job to act, can also be a comma separated list, * (each) or a range (ex. 10,11,12 or 10-12)');
echo gettext('Enter the days of the month for the job to act, can also be a comma separated list, * (each) or a range (ex. 1,20,28 or 1-28)');
echo gettext('Enter the months for the job to act, can also be a comma separated list, * (each) or a range (ex. 1,2,3 or 1-3)');
echo gettext('Enter the days of the week for the job to act, can also be a comma separated list, * (each) or a range (ex. 1,2,3 or 1-3)');
echo gettext('Select the command that needs to be executed at given time frame.');
echo gettext('Enter parameters for this job if required.');
echo gettext('Enter a description to explain what this job is intended for.');
