Commerce Deposit
================

# Roadmap

 - The Deposit line item type, needs an entity reference field (maybe a product
 reference field) automatically added to it. Right now it has to be done
 manually through the UI.

# Module Installation and Setup

Download and enable the module as usual. Then follow the instructions listed in
the `Deposit`, `Product types` and `Products` sections below to properly
configure the module for usage.

# Deposit

Each deposit line item will reference a product that it is depositing against.
This means we need to add an Entity reference field to the Deposit line item
type.

1. Go to: Store -> Configuration -> Line item types -> Deposit -> Manage fields
          admin/commerce/config/line-items/deposit/fields
2. Add new field
     Label: Product
     Machine name (very important): field_commerce_deposit_product
     Field type: Entity reference
     Widget: Autocomplete
3. Click "Save"
4. Under "Target type" select the "Commerce Product" option
5. Optional, check the box(es) next to the "Target bundles" to limit which
   `Product types` can be referenced.
6. Click "Save field settings"
7. Check the box next to "Required field"
8. Click "Save settings"

# Product types

In order for the deposit system to work properly, we need to specify which
product types are allowed to have a deposit. We do this by utilizing a Boolean
field. We only need to create this field once, then it can be used across each
product type (if we have multiple)

To enable deposits on a particular product type, for example, go to:

1. Go to: Store -> Products -> Product types -> Product -> Manage fields
          admin/commerce/products/types/product/fields
2. Add new field (only add once, and instead use "Add existing field" next time)
     Label: Deposit
     Machine name (very important): field_commerce_deposit
     Field type: Boolean
     Widget: Single on/off checkbox
3. Click "Save"
4. Leave the "On value" and "Off value" text fields blank
5. Click "Save field settings"
6. Check the box for "Use field label instead of the 'On Value' as label", leave
   everything else set to its default value.
7. Click "Save settings"

# Products

Now that we have a boolean field to indicate which products are allowed to have
a deposit, we need to specify which products will have deposits.

1. Go to: Store -> Products
          admin/commerce/products
2. Click "edit" next to a product that is allowed to have a deposit
3. Check the box next to "Deposit"
4. Click "Save Product"
5. Repeat this for each product that can have a deposit

If you have many products that need to be marked, use the Views Bulk Operations
module to save yourself much time.

# How it Works

Automatically creates a `Line item type` called `Deposit`. When this line item
is added to an order, it will reference the product for which it is making the
deposit against.

Store -> Configuration -> Line item types
admin/commerce/config/line-items

The Drupal Admin specifies which `Product types` will have the Deposit feature
enabled.

The Drupal Admin specifies which `Products` may have a Deposit purchased.

