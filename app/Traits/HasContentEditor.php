<?php

namespace App\Traits;

trait HasContentEditor
{
    public static function getContentEditor(string $field)
    {
        $defaultEditor = \Filament\Forms\Components\RichEditor::class;
        $toolBarArray = [
            'attachFiles',
            'blockquote',
            'bold',
            'bulletList',
            'codeBlock',
            'h2',
            'h3',
            'italic',
            'link',
            'orderedList',
            'redo',
            'strike',
            'undo',
        ];

        return $defaultEditor::make($field)
            ->label('Content')
            ->required()
            ->toolbarButtons($toolBarArray)
            ->columnSpan([
                'sm' => 2,
            ]);
    }
}
