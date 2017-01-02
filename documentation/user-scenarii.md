User Scenarii
===

### Authentication

On login page, automatically displayed if not already logged in.

- Type in credentials (Insightly token OR mail/password) in dedicated texts fields.
- Validate form

When authentication failed :
- Display login page and an error message to inform user about the problem

When authentication success :
- Export page is displayed and user can start using the application.

When users forget their passwords :
- They can click on link to reinitialize their password this step is described at the end of this document.

#### Precisions !
All scenaries describe below need automatically to be authenticated

### Set filter
In displayed area

- Select a pipeline in the dedicated select box then validate
- Pipeline's selectbox get frozen and the stage selectbox become availlable
- Select a stage in select box then validate
- Select state in select box then validate

When pipeline has been select or more steps have been realized  :
- Button for *Export can be clickable.

### Save filters configuration

On horizontal strip area

- Set filter (cf: Set filter )
- Set name of current filter in the text field.

When name which has been write already exists :
- Display in red text field and message which explain the mistake (*"as exemple: name already exists !"*).

When name which has been write not already exists :
- Click on save button to save current filter's configuration and name.

### Set filter save

On horizontal strip area

- Click on SelectBox ( named: *filters history* ) to visualize saved filters, by default it's write *"selected"* in this area.
- Click on desired filter to select it.
- Click on Load button, which is display on selectbox to load desired filter.


### Export email list from insightly
In dedicated area

- Set filter (cf: set filter OR Set saved filter)
- Click on export button to export current filter using

### Preview
In displayed area

- Set filter  (cf: Set filter OR Set filter save)
- Check on box preview the desired result (number of Opportunities and number of Contacts)

### Modify filter save
On the dedicated area

- Set filter save (cf: Set filter save)
- Select pipeline to change current pipeline
- select stage to change current stage
- select state to change current state

When one field or all are modify :
- Buttons for Save can be clickable.
- Click on save button to save the new filter's configuration.


### Delete filters configuration saves
On dedicated area

- Click on selectbox to visualize saved filters
- Select a filter
- Click on Delete button.
- Pop'up will be display to confirm this action with two choices represent by two buttons(*"Confirm"* and *"Cancel"*)

When *"Confirm"* has been clicked:

- Current filter will be delete
- Display message to success

When *"Cancel"* has been clicked:

- Return to previous state

### Configure User parameters

In worries about to let users change their profile after created it

- Click on modification button to acces to the modifications' list.
- Changed what is necessary.
- Click to the save button to save modifications.

### User's password forget

In this scenario the user is not log yet !

- Click on the link at the end of the validate form on the login page.
- Users must check their emails box and open the mail from the application.
- Click on the link in the email to be redirect on the reinitialize password page.
- Create a new password then validate it.
