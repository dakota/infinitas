<?php
    /**
     * Comment Template.
     *
     * @todo -c Implement .this needs to be sorted out.
     *
     * Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     *
     * Licensed under The MIT License
     * Redistributions of files must retain the above copyright notice.
     *
     * @filesource
     * @copyright     Copyright (c) 2009 Carl Sutton ( dogmatic69 )
     * @link          http://infinitas-cms.org
     * @package       sort
     * @subpackage    sort.comments
     * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
     * @since         0.5a
     */

    echo $this->Form->create('Campaign');
        echo $this->Infinitas->adminEditHead();
        echo $this->Form->input('id');
        echo $this->Form->input('name', array('class' => 'title'));
        echo $this->Letter->wysiwyg('Campaign.description');
        echo $this->Form->input('template_id');
    echo $this->Form->end();
?>