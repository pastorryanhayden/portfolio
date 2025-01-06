<?php
namespace App\Filament\Resources;

use App\Filament\Resources\CaseStudyResource\Pages;
use App\Models\CaseStudy;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Main Info')
                    ->description('The identifying info for the Case Study')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->columnSpan(1)
                            ->required(),
                        TextInput::make('slug')
                            ->columnSpan(1)
                            ->required()
                            ->rules(['alpha_dash']),
                        Toggle::make('is_published')
                            ->columnSpan(2)
                            ->label('Published?'),
                        TextArea::make('description')
                            ->columnSpan(2)
                            ->required(),
                        FileUpload::make('featured_image')
                            ->columnSpan(2)
                            ->image()
                            ->required(),
                        CheckboxList::make('categories')
                            ->relationship(titleAttribute: 'name')
                            ->columnSpan(2),
                    ]),
                MarkdownEditor::make('body')
                    ->required()
                    ->helperText('Use Markdown')
                    ->columnSpan(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCaseStudies::route('/'),
            'create' => Pages\CreateCaseStudy::route('/create'),
            'edit'   => Pages\EditCaseStudy::route('/{record}/edit'),
        ];
    }
}
