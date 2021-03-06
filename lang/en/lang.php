<?php return [
    'plugin' => [
        'name'        => 'Notes',
        'description' => 'Add notes to any and all OctoberCMS models',
    ],
    'models' => [
        'note' => [
            'label' => 'Note',
            'label_plural' => 'Notes',
            'name'  => 'Title',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'delete_confirm' => 'Are you sure you want to delete the selected note?',
        ],
    ],
];
