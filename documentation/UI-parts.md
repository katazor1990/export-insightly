UI parts
===

# Main

## Login page

### Header(1)

*This part described the main authenticate's feature but others will be add in the future , reports to the Features part for more details.*

- Text Zone contains Project Title (Export Insightly).

#### Header(1.A)

*This part is dedicated to users' Sign out.*

- Sign out button, to allowed user to disconnect

#### Header(1.B)

#### Label Area

- Text field which contains insightly's user information(firstname/lastname).

<img src="documentation/zoning-export-insightly/header-1.png" />

### Authentication From (2)

*This part described the main authenticate's feature but others will be add in the future , reports to the Features part for more details.*

This zone is a form which is split in 2 parts .

#### Authentication Form (2.A)

In this zone we have three mains areas, described below :

- Label Field (named: Insightly Token) to indicate at user what he must write.
- Input Field (blank by default) user write down his Insightly token in this one.
- Submit Button to validate user's authentication.


#### Authentication Form (2.B)

This zone it use to inform user if his authentication failed with an error message.

- Text Field, where authentication's error is described *(ex: "Autentication Error ! Please retry.")*.


<img src="documentation/zoning-export-insightly/authentication.png" />

## Export page
*This part described the main export page feature but others will be add in the future , reports to the Features part for more details.*

*After authentication*

### Header(1)

- Text Zone contains Project Title (Export Insightly).

### Export Zone(3)

### Export Zone(3.A)

This zone is split into 3 areas (describ below) which use to make filters on differentes criteria (*Pipeline, Stage, State* ) each one link to the previous criterion (*need a validation step*) .

Needs:

- Text Field use to appointed the current filter (*ex: Pipeline*).
- Select Box use to select among the differents choices possible (*ex: Pipeline 1, Pipeline 2, Pipeline 3*).
- Validation Button use to validate tne current choice necessary to pass to the next criterion (*ex: Pipeline1 -> Stag2*).

### Export Zone(3.B)

This zone is composed of 2  parts :

- Preview Zone (Label + result)
- Export Zone

Needs for the preview:

##### Label Zone

- Label Zone named *Opportunities*
- Label Zone named *Contacts*

##### Outputs Zones

- Output Zone for number of Opportunities.
- Output Zone for number of Contacts.

Needs for the Export:

#### Validation

- Submit button to download the current filter's result.

<img src="documentation/zoning-export-insightly/export-zone.png" />

# Features

Some features can be added in the future, there are detailed below:
- Authentication with email and password.
- Configuration of Users' parametres.
- Saved filter's list with 3 possibilities (*SAVE, LOAD, DELETE*).

## Authentication with email/password(2)

### Login page(2.A)

The main difference is in authentication form (*zone 2.A*).

Needs :

#### Label Zone

- Label Field (named: user email) to indicate what user must write.
- Label Field (named: password) to indicate what user must write.

#### Inputs Zone

- Input Field (blank by default) user write down his email.
- Input Field (blank by default) user write down his password.

#### Validation

- Submit Button to validate user's authentication.

#### Forgot password

- Link to send at user's email a link to redirect on the reinitialize password page.


## Configuration of Users' parametres

### Export page

#### Header(1.B)

If the user wants to change their connection informations.

Needs :

#### Icon Area

- Icon to described user's configurations space.

#### Label Area

- Text field which contains user's email.

#### Modification Button

- Button to open list of parameters.

#### Parameters Area

This area (pop-up) is split in 2 parts(*Email* AND *Password*)

Needs:

#### - Label Zone

- Label Field (named: user email) to indicate what user can modify.
- Label Field (named: password) to indicate what user can modify.

#### - Inputs Zone

- Input Field (blank by default) user write down his email.
- Input Field (blank by default) user write down his password.

#### - Validation

- Submit Button to validate user's modifications.

<img src="documentation/zoning-export-insightly/header-2.png" />

## Saved filter's list(4)

The mainly difference take place on the export page after authentication.

## Export page

### Filter's list (4.A)

This first part is use to saved current filter's configuration and set his name.

Needs:

- Submit button to save filter(*label: save*)
- Input Zone to set name of the current filter

### Filter's list (4.B)

This second part allowed to Select filter in the list, delete or load it.

Needs:

- Select Box , this is an history of saved filtres.
- Submit Button, (*named: load*) to load selected filter.
- Submit Button, (*named: Delete*) to delete selected filter.

<img src="documentation/zoning-export-insightly/features-saved-filters.png" />
