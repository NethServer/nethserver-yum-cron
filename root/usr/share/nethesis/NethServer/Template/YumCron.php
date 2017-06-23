<?php
/* @var $view Nethgui\Renderer\Xhtml */
echo $view->header()->setAttribute('template', $T('YumCron_header'));

echo $view->panel()
->insert($view->fieldsetSwitch('status', 'enabled', $view::FIELDSETSWITCH_CHECKBOX | $view::FIELDSETSWITCH_EXPANDABLE)->setAttribute('uncheckedValue', 'disabled')
    ->insert($view->checkBox('download', 'yes')->setAttribute('uncheckedValue', 'no'))
    ->insert($view->textArea('customParam', $view::LABEL_ABOVE)->setAttribute('dimensions', '10x30'))
    ->insert($view->selector('checkOnly', $view::SELECTOR_DROPDOWN))
    ->insert($view->textArea('customMail', $view::LABEL_ABOVE)->setAttribute('dimensions', '10x30'))
);

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_HELP);
