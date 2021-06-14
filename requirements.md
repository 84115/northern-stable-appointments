# Tasks
 - Create an API capable of the following operations: Create, Read, Update and Delete on "Appointments".
 - Appointments should contain up to 6 relevant fields/relationships (user, time, service etc...)
 - Consider modelling two more complicated relationships/entities - eg: User->Appointments? Service->Appointments?
 - Upon creation and deletion of an appointment the system must send an email? How would this scale?
 - Use any language/framework/app/tool you feel most comfortable

# Authentication
Setup Breeze

# Authorisation
For the API Auth I have set up a simple Passport installation. Add docs to set this up.

# Seed data
Just fill it in with Faker.

# DB Migrations
Create a rough schema for project (bottom of this file).

# ENV variables and secret management
.env is kept untracked in the git repo. This is so that a diffrent set of codes can be stored on the remote servers
where the code would potentially be deployed.

# Logging - system/application
I'd normally log to files and archive older entries. Has the option to scale using a seperate service if required.

# Monitoring / Alerting
Use Sentry as service, can mostly be docs as account required.

# Unit Tests
Write a few basic ones before testing isolate parts of code.

# Functional / Integration Tests
Test from the API endpoint to test a user/api complete process.

# API Versioning / API Spec
Create v{n} dir in app/Http/Controllers/Api.

# Local development for multiple developers
I'd normally use Laravel Valet but an alterative could be Homestead.

# Code version control and branch/development life-cycle
Use main and feature/id-name

# What could a deployment look like? (Infra/CI/CD)
Can you .gitlab-ci of how the could be done.

# Database Structure
users
    user_id:id
    name:string
    email:string,unique
    email_verified_at:timestamp,nullable
    password:string

appointments
    appointment_id:id
    appointment_hosts:appointment_hosts_id
    service_id:service_id
    time:timestamp
    name:string
    reference:string
    notes:string

appointment_hosts
    appointment_host_id:id
    appointment_id:id
    user_id:user:id

services
    service_id:id
    name:string,unique
