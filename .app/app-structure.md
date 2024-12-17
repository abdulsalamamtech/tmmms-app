# TMMMS APP
Truck Monitoring Maintenance Management System

## Users and Actors
- admin
    - super admin
    - admin
    - manager

- users
    - name
    - email
    - password
    - role [refinery | marketer | transporter | driver ]

- roles
    - name
    - description
- user_role
    - user_id
    - role_id

- assets
    - name
    - file_id
    - type
    - size

- administrator_departments
    - user_id

- refinery
    - license_number
    - license_details
    - name
    - email
    - phone number
    - address
    - state
    - country

        - refinery_departments
            - user_id
            - refinery_id
            - role
            - responsibilities_description
            - zone
            - state

- marketers
    - license_number
    - license_details
    - name
    - email
    - phone number
    - address
    - state
    - country

        - marketer_departments
            - user_id
            - marketer_id
            - role
            - responsibilities_description

- transporters
    - license_number
    - license_details
    - name
    - email
    - phone number
    - address
    - state
    - country

        - transporter_departments
            - user_id
            - transporter_id
            - role
            - responsibilities_description

        - drivers
            - first_name
            - last_name
            - other_name
            - email
            - phone number
            - license_number
            - license_details
            - address
            - state
            - country


        - trucks
            - id
            - name
            - description
            - truck_number
            - quantity
            - compartment (3)
            - calibrate_one
            - calibrate_two
            - calibrate_three
            - verification [verified | pending]

        - truck_drivers
            - truck_id
            - driver_id
    

- payment_accounts [for sending payments for transporters][marketers & transporters]
    - virtual_payment_account
    - amount
    - user_id

- exchange_rates
    - refinery_id
    - naira
    - dollar

- accounts
    - refinery_id
    - marketer_id
    - accounts_type [dprp | dogcl]
    - amount

- product_type [added my the platform]
    - name [LPG]
    - description

- products
    - product_type_id 
    - refinery_id
    - price [naira]

- purchases [PFI]
    - pfi_number
    - product_id
    - liters

- transactions
    - purchase_id
    - product_id
    - payment_amount
    - payment_amount_currency [NGN | USD]
    - payment_status [verified | pending]

- transaction_proofs
    - transaction_id
    - asset_id
    - bank_name [from bank eg UBA | Access bank | GTCO | FCMB]
    - payment_id [from bank]
    - reference_number [from payment slip]
    - payment_amount [from bank]


- programs [send program request to refinery to get ATC number for each program]
    - transaction_id
    - pfi_number
    - marketer_id
    - approved [ true | false]

    - atc_number  [ATC] [from refinery]
    - generated_by []

    - meter_ticket_number [at refinery deport]
    - waybill_number [from marketers representatives]

    - customer_name [for customers buying truck product after refinery approval default is marketers details]
    - customer_phone_number [for customers buying the truck product]
    - address
    - lga
    - state
    - country [default as nigeria]

- program_trucks
    - program_id [from program]
    - purchase_product_id
    - truck_id


- movements [truck location]
    - program_id
    - truck_id
    - longitude [from truck]
    - latitude [from truck]
    - description

- delivering_status




purchase
add programs
    litters/quantity
    description
        it will take you to the program page that was just created
add trucks
    litters/quantity
    transporter/company
    select trucks from drop down list

approved programs page
    assign customers
        - customer_name [for customers buying truck product after refinery approval default is marketers details]
        - customer_phone_number [for customers buying the truck product]
        - address
        - lga
        - state
        - country [default as nigeria]