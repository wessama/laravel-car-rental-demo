<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'assetManagement' => [
        'title'          => 'Asset management',
        'title_singular' => 'Asset management',
    ],
    'assetCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
        ],
    ],
    'assetLocation' => [
        'title'          => 'Locations',
        'title_singular' => 'Location',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'assetStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'asset' => [
        'title'          => 'Assets',
        'title_singular' => 'Asset',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'category'                 => 'Category',
            'category_helper'          => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'photos'                   => 'Photos',
            'photos_helper'            => ' ',
            'notes'                    => 'Notes',
            'notes_helper'             => ' ',
            'assigned_to'              => 'Assigned to',
            'assigned_to_helper'       => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated At',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted At',
            'deleted_at_helper'        => ' ',
            'make'                     => 'Make',
            'make_helper'              => ' ',
            'model'                    => 'Model',
            'model_helper'             => ' ',
            'year'                     => 'Year',
            'year_helper'              => ' ',
            'price'                    => 'Price',
            'price_helper'             => ' ',
            'amenity'                  => 'Amenity',
            'amenity_helper'           => ' ',
            'color'                    => 'Color',
            'color_helper'             => ' ',
            'short_description'        => 'Short Description',
            'short_description_helper' => ' ',
        ],
    ],
    'assetsHistory' => [
        'title'          => 'Assets History',
        'title_singular' => 'Assets History',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'asset'                 => 'Asset',
            'asset_helper'          => ' ',
            'status'                => 'Status',
            'status_helper'         => ' ',
            'assigned_user'         => 'Assigned User',
            'assigned_user_helper'  => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'mileage'               => 'Mileage',
            'mileage_helper'        => ' ',
            'fuel_indicator'        => 'Fuel Indicator',
            'fuel_indicator_helper' => ' ',
        ],
    ],
    'customer' => [
        'title'          => 'Customers',
        'title_singular' => 'Customer',
    ],
    'booking' => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'asset'                   => 'Asset',
            'asset_helper'            => ' ',
            'pickup_date'             => 'Pickup Date',
            'pickup_date_helper'      => ' ',
            'dropoff_date'            => 'Dropoff Date',
            'dropoff_date_helper'     => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'user'                    => 'Customer',
            'user_helper'             => ' ',
            'pickup_location'         => 'Pickup Location',
            'pickup_location_helper'  => ' ',
            'dropoff_location'        => 'Dropoff Location',
            'dropoff_location_helper' => ' ',
            'canceled'                => 'Canceled',
            'canceled_helper'         => ' ',
            'refunded'                => 'Refunded',
            'refunded_helper'         => ' ',
            'status'                  => 'Status',
            'status_helper'           => ' ',
        ],
    ],
    'transaction' => [
        'title'          => 'Transactions',
        'title_singular' => 'Transaction',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'user'                   => 'Customer',
            'user_helper'            => ' ',
            'booking'                => 'Booking',
            'booking_helper'         => ' ',
            'payment_status'         => 'Payment Status',
            'payment_status_helper'  => ' ',
            'payment_amount'         => 'Payment Amount',
            'payment_amount_helper'  => ' ',
            'payment_method'         => 'Payment Method',
            'payment_method_helper'  => ' ',
            'payment_details'        => 'Payment Details',
            'payment_details_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'document' => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'user'                 => 'Customer',
            'user_helper'          => ' ',
            'comments'             => 'Comments',
            'comments_helper'      => ' ',
            'verified'             => 'Verified',
            'verified_helper'      => ' ',
            'document'             => 'Document',
            'document_helper'      => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'document_type'        => 'Document Type',
            'document_type_helper' => ' ',
        ],
    ],
    'documentType' => [
        'title'          => 'Document Types',
        'title_singular' => 'Document Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'amenity' => [
        'title'          => 'Amenity',
        'title_singular' => 'Amenity',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqManagement' => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'review' => [
        'title'          => 'Review',
        'title_singular' => 'Review',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'name'                    => 'Name',
            'name_helper'             => ' ',
            'email'                   => 'email',
            'email_helper'            => ' ',
            'rating'                  => 'rating',
            'rating_helper'           => ' ',
            'rating_breakdown'        => 'Rating Breakdown',
            'rating_breakdown_helper' => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'asset'                   => 'Asset',
            'asset_helper'            => ' ',
        ],
    ],

];
