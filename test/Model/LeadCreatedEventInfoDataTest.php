<?php
/**
 * LeadCreatedEventInfoDataTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CRMDialer API
 *
 * # Introduction Welcome to CRMDialer™s API!  The API is organized around `REST`. All requests should be made over `SSL`.  All request and response bodies, including errors, are encoded in `JSON`. # Open API The Open API provides numerous functions to access or to update your CRM lead data using simple REST calls. ### You can use the Lead API to: - Get a list of leads with field data, notes, appointments, tasks, users and, documents - Get a list of available campaigns, groups, sources, and statuses - Create a new lead, lead note, task, or an appointment - Assign and un-assign users to a lead - Upload or download documents - Update field data, status, campaign, group, and source - Generate an e-signature application and get a list of available apps  # Generate an API token When you send an API request, you will need to include an API token in your request in order to authenticate your account.  The tokens are generated in the CRM by each user individually, and each user may create one or more tokens.  To generate a new API Token, open your user settings page by clicking on your username in the top-right corner, and clicking on the ** Settings ** link.  Then open the ** API Settings ** tab, click ** Create New API Token **, configure your tokenвЂ™s settings as needed, and click ** Add New Token **:  <img src=\"images/docs/mapi001.png\"/>  Your new token will now be created and displayed in a popup window:  <img src=\"images/docs/mapi002.png\"/>  Once the token is created, it will be shown in the list of available API Tokens where you can copy the token, update its settings, or delete it once itвЂ™s no longer needed:  <img src=\"images/docs/mapi003.png\"/>  ** Note: ** The created tokens will inherit the userвЂ™s permissions to assigned, leads, groups and processors.  # Using the API Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code.  Note that all requests should be made over `SSL`. All request and response bodies, including errors, are encoded in JSON.  The API returns standard HTTP success or error status codes. In case of errors, additional information about what went wrong will be encoded in the response as JSON.  By default, you can make `120` requests per minute. Check the returned HTTP headers of any API request to see your current rate limit status. # Using the Subscription API API Subscriptions are used to send information about an event to a URL and trigger an API call. This is more efficient than doing scheduled API calls.  To create a subscription, use the API Settings page or send a request using the instructions in the Subscriptions section below.  All you need to know is the events you want to be subscribed for and the url to which the updates need to be sent.  To create subscriptions using our GUI open tab ** API Settings ** at ** SETTINGS **: <img src='images/docs/new-subscription.png'/> Authenticate your account by including your secret key in API requests. Do not share your secret API keys in publicly accessible areas, client-side code, and so forth. Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code. # Errors Our API returns standard `HTTP` success or error status codes. For errors, we will also include extra information about what went wrong encoded in the response as `JSON`. # Rate limiting You can make `120` requests per minute. Check the returned `HTTP` headers of any API request to see your current rate limit status.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@crmdialer.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * LeadCreatedEventInfoDataTest Class Doc Comment
 *
 * @category    Class
 * @description LeadCreatedEventInfoData
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LeadCreatedEventInfoDataTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "LeadCreatedEventInfoData"
     */
    public function testLeadCreatedEventInfoData()
    {
    }

    /**
     * Test attribute "lead"
     */
    public function testPropertyLead()
    {
    }
}
