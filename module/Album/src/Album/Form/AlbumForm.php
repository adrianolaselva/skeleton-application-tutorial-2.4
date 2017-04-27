<?php
/**
 * Created by PhpStorm.
 * User: a.moreira
 * Date: 27/04/2017
 * Time: 12:03
 */

namespace Album\Form;


use Zend\Form\Form;

/**
 * Class AlbumForm
 * @package Album\Form
 */
class AlbumForm extends Form
{


    /**
     * AlbumForm constructor.
     */
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('album');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'title',
            'type' => 'Text',
            'options' => array(
                'label' => 'Title',
            ),
        ));
        $this->add(array(
            'name' => 'artist',
            'type' => 'Text',
            'options' => array(
                'label' => 'Artist',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
}