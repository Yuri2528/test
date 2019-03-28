<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 28.03.2019
 * Time: 9:27
 */

use app\models\Treetwo;
use kartik\tree\TreeViewInput;
echo TreeViewInput::widget([
    // single query fetch to render the tree
    'query'             => Treetwo::find()->addOrderBy('root, lft'),
    'headingOptions'    => ['label' => 'Categories'],
    'name'              => 'kv-product',    // input name
    'value'             => '1,2,3,4,5',         // values selected (comma separated for multiple select)
    'asDropdown'        => true,            // will render the tree input widget as a dropdown.
    'multiple'          => true,            // set to false if you do not need multiple selection
    'fontAwesome'       => true,            // render font awesome icons
    'rootOptions'       => [
        'label' => '<i class="fa fa-tree"></i>',
        'class'=>'text-success'
    ],                                      // custom root label
    //'options'         => ['disabled' => true],
]);