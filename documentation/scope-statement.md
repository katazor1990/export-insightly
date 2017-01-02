Scope statement
===

**Object :** This document will define technical and fonctionnal scope of the application.

### Context

This project is an internal request.

#### Client

Timothée Le Roy (Marketing and communication manager)

#### End-users

- Timothée Le Roy
- Dounia Louat (CEO assistant)
- Thomas Busson (CEO)

#### Existing tools

##### Insightly

Insightly is a CRM (customer relationship managment) tool used by commercial team.
Customers relationship are called opportunities, structured by pipelines that define current state and actions to apply.

See : [www.insightly.com](https://www.insightly.com/)

##### Mailchimp

Mailchimp is a web application used by marketing team to massively send emails.

See : [mailchimp.com](http://mailchimp.com/)

### Needs

The need is to get back  massive lists of email, in one concerns of saving time and efficiency

#### Primary
In order to send massive emailing campains to customers, the marketing team need to export list of customers information based on the status of their relation (opportunity).

The status of the customer relation is defined by the following list of criteria :
- Pipeline name
- Pipeline step name
- Opportunity status

To build personalized email for each customer, exported data should contain :
- firstname
- lastname
- company
- function
- email address

Export must be a CSV file to match mailchimp importing rules.

#### Optionnals

There are some other features wished but not needed :

##### User management

In order to connect the application to insightly, user will have to use his insightly API token to authenticate.
It could be easier for end-users to have their own user profile in the application, including token.
This way, users could authenticate with login/password pair instead of API token (which would be in profile settings).

##### Saving export configuration

As customer relation change over time, it could be usefull to be able to save some export configuration in order to re-use it.

##### Import to mailchimp

Exported data from insightly could be send directly to mailchimp.

### Technical constraint

#### Environment

Application will be used by co-workers on two differents operating systems :
- Microsoft Windows 10 home editions
- Mac OS X 10.12 Sierra

#### External APIs

##### Insightly

Insightly expose a REST API, documentation can be found [here](https://www.insightly.com/crm-developer-api/). They provide clients for a large variety of languages.
