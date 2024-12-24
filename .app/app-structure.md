# TMMMS APP
Truck Monitoring Maintenance Management System

## Users and Actors

- roles
    - name
    - description

- user_role
    - user_id
    - role_id

- administrator_departments
    - user_id

- admin
    - super admin
    - admin
    - manager




[START Documentation]
############################################################

- users
    - id
    - name [full name of the user | username | administrators | refinery name etc]
    - email
    - password
    - role [administrator | refinery | marketer | transporter | driver ]
    - phone_number
    - address
    - city [local government area]
    - state
    - country [default as Nigeria]
    - updated_at [datetime]
    - created_at [datetime]


[ activities should be updated to everything going on in the application]
- activities
    - id
    - user_id
    - role
    - description [what is the person doing? for everything going on in the application]
    - logs [json object or array of objects]

- assets
    - id
    - name
    - file_id
    - type [image | video | file]
    - url
    - path
    - description
    - size
    - hosted_at [AWS | cloudinary server | ImageKit server]




- refineries
    - id
    - user_id
    - license_number
    - license_details
    - description
    - status [pending | verified | rejected]

        - refinery_departments [using the role & permissions library]
            - id
            - user_id
            - refinery_id
            - role
            - responsibilities_description
            - zone
            - state

- marketers
    - id
    - license_number
    - license_details

        - marketer_departments
            - id
            - user_id
            - marketer_id
            - role
            - responsibilities_description

- transporters
    - id
    - license_number
    - license_details

        - transporter_departments
            - id
            - user_id
            - transporter_id
            - role
            - responsibilities_description

        - drivers
            - id
            - added_by [administrator user_id] 
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
            - status [pending | verified | rejected]
            - movement_status [pending | assigned ]

        - trucks
            - id
            - driver_id
            - added_by [transporter user_id] 
            - name
            - description
            - truck_number
            - quantity
            - compartment (3)
            - calibrate_one
            - calibrate_two
            - calibrate_three
            - status [pending | verified | rejected]
            - movement_status [pending | assigned ]



----------------------------------------------------------------
(how to design a virtual accounts)
- virtual_account
- payment_accounts [for sending payments for transporters][marketers & transporters]
    - virtual_payment_account
    - amount
    - user_id
----------------------------------------------------------------


- exchange_rates
    - id
    - refinery_id
    - naira
    - dollar
    - added_by [refinery user_id] 

- accounts
    - id
    - refinery_id
    - marketer_id
    - accounts_type [dprp | dogcl]
    - amount
    - credit
    - debit

- product_type [added by the platform administrator]
    - id
    - name [LPG]
    - description
    - added_by [administrator user_id] 

- products
    - id
    - product_type_id 
    - refinery_id
    - price [naira]
    - added_by [refinery user_id] 
    - status [pending | active ]


- purchases [PFI] 
            [an email will be sent to the marketer with the purchase and payment information]
            [payment amount is calculated at the time of purchase and last for 48 hours]
    - id
    - refinery_id
    - marketer_id
    - product_id
    - pfi_number [random number]
    - liters
    - amount

- purchase_messages [messages for this purchase]
    - id
    - purchase_id
    - refinery_id
    - marketer_id
    - comment_by_refinery
    - comment_by_marketer

- purchase_payment_proofs
    - id
    - purchase_id
    - product_id

    - asset_id [where image of file for payment proof are stored]
    - bank_name [from bank eg UBA | Access bank | GTCO | FCMB]
    - reference_number [from bank payment slip]
    - amount [from bank]
    - currency [NGN | USD default currency as NGN]

    (from refinery)
    - payment_status [pending | verified | rejected]
    - comment [from refinery]
    - added_by [administrator user_id] 



- programs 
        [send program request to refinery to get ATC number for each program even before payment proof approval]
        [how will transportation payment be calculated]
    - id
    - refinery_id
    - marketer_id
    - purchase_id

    (from refinery)
    - status [pending | approved | completed]
    - atc_number  [ATC] [from refinery]
    - generated_by [refinery user_id]


- program_messages [messages for this program]
    - id
    - program_id
    - refinery_id
    - marketer_id
    - comment_by_refinery
    - comment_by_marketer


- movements [program trucks]
        [this are list of trucks added to program]
        [update the driver and truck information status]
    - id
    - program_id [from program]
    - truck_id
    - liters
    - status [pending | delivered]

    - liters_lifted
    - meter_ticket_number [at refinery deport]
    - waybill_number [from marketers representatives]

        - customer_name [for customers buying truck product after refinery approval default is marketers details]
        - customer_phone_number [for customers buying the truck product]
        - address
        - city [LGA: local government area]
        - state
        - country [default as nigeria]

- locations [truck location]
    - id
    - program_id
    - truck_id
    - longitude [from truck]
    - latitude [from truck]
    - description
    - status [lifted | ]



##################################################
[END Documentation]






purchase [email is sent to marketer with ATC and payment amount]
add programs
    litters/quantity
    description
        (it will take you to the program page that was just created)
        add trucks
            litters/quantity
            transporter/company
            select trucks from drop down list

approved programs page [after approval from refinery, marketers can change customers on a truck program]
    assign customers
        - customer_name [for customers buying truck product after refinery approval default is marketers details]
        - customer_phone_number [for customers buying the truck product]
        - address
        - lga
        - state
        - country [default as nigeria]

complete page to view 
    - all purchase
    - all programs
    - all movements | truck_programs
    - upload payment proofs.