# Authentication
This was scaffolded using Laravel Breeze.

# Authorisation
For the API Auth I have set up a simple Passport installation.
1. Create an account via `http://northern-stable-appointments-src.test/register`.
2. Go to `http://northern-stable-appointments-src.test/dashboard/clients` and create a callback from the form (the Redirect should be `{APP_URL}/callback`).
3. Return to `http://northern-stable-appointments-src.test/dashboard/clients`.
4. From here you have access to you're OAuth id, secret and callback to setup API access.

# Seed data
All seeded Data has been added to the directory:
`/database/seeders`
Note: Appointment(s) is not seeded, but this can be created via it's API endpoint `/api/v1/appointments`

# DB Migrations
- users
    - user_id:id
    - name:string
    - email:string,unique
    - email_verified_at:timestamp,nullable
    - password:string
- appointments
    - appointment_id:id
    - appointment_hosts:appointment_hosts_id
    - service_id:service_id
    - time:timestamp
    - name:string
    - reference:string
    - notes:string
- appointment_hosts
    - appointment_host_id:id
    - appointment_id:id
    - user_id:user:id
- services
    - service_id:id
    - name:string,unique

# ENV variables and secret management
.env is kept untracked in the git repo.
This is so that a different set of codes can be stored on the remote servers where the code would potentially be deployed.

# Logging - system/application
I'd normally log to files and archive older entries. Has the option to scale using a seperate service if required.

# Monitoring / Alerting
Normally I would use Sentry: https://sentry.io to handle application monitoring.
I've skipped adding this to the project as an account would be required and due to time constraints.

# Unit Tests
The unit tests have been added to the directory:
`/tests/Unit`

# Functional / Integration Tests
The integration tests have been added to the directory:
`/tests/Unit`

# API Versioning / API Spec
I have created a new directory with the naming convention of v{n} in;
`/app/Http/Controllers/Api`.

# Local development for multiple developers
I'd normally use Laravel Valet for a shared local enviroment but that is limited to osx only.
An alterative could be used is Homestead.

# Code version control and branch/development life-cycle
I've used the following convention for naming development branches `feature/id/branch-name`.

# What could a deployment look like? (Infra/CI/CD)
I have added a directory to the root of the project called `/.gitlab-ci` to show what a configuration of CI would look like.
The feature/changes could then be opened as a pull/merge request.
Where upon passing could be merged into the active deployment branch.
Once the active deployment branch is ready to be deployed it is merged with Gitlab where it will be deployed.

# Task Notes
- Appointments should contain up to 6 relevant fields/relationships (user, time, service etc...)
    - n/a
- Create an API capable of the following operations: Create, Read, Update and Delete on "Appointments".
    - The endpoint for this resource is `/api/v1/appointments`.
- Consider modelling two more complicated relationships/entities - eg: User->Appointments? Service->Appointments?
    - I have added the relationships to all the models in the project.
    - Although due to trying to keep to the 4/5 hour timeframe I haven't added the relationship to the JsonResource of the API endpoint.
- Upon creation and deletion of an appointment the system must send an email? How would this scale?
    - This feature wasn't completed due to the timeframe but code idea was to use a Model Observer `/app/Observers/AppointmentObserver.php`
    - To send emails based on if the Model was either created or destroyed.
