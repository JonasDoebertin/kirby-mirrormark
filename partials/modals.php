<div class="visualmarkdown-modal" data-visualmarkdown-modal="shortcuts">
    <div class="visualmarkdown-modal-wrap">
        <h3 class="visualmarkdown-modal-title">
            <?= $field->lang('modal.shortcuts.title', 'Keyboard Shortcuts') ?>
        </h3>
        <table class="visualmarkdown-shortcuts">
            <tbody>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.heading', 'Heading') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>H</kbd> or <kbd>&#8984;</kbd><kbd>H</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.subheading', 'Subheading') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>Alt</kbd><kbd>H</kbd> or <kbd>&#8984;</kbd><kbd>Alt</kbd><kbd>H</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.bold', 'Bold') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>H</kbd> or <kbd>&#8984;</kbd><kbd>B</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.italic', 'Italic') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>H</kbd> or <kbd>&#8984;</kbd><kbd>I</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.strikethrough', 'Strikethrough') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>Alt</kbd><kbd>U</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.blockquote', 'Blockquote') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>Q</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.unorderedList', 'Unordered List') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>L</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.orderedList', 'Ordered List') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>Alt</kbd><kbd>L</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.image', 'Image') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>Alt</kbd><kbd>I</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.link', 'Link') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>K</kbd> or <kbd>&#8984;</kbd><kbd>K</kbd>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?= $field->lang('modal.shortcuts.action.email', 'Email') ?>
                    </th>
                    <td>
                        <kbd>Ctrl</kbd><kbd>E</kbd> or <kbd>&#8984;</kbd><kbd>E</kbd>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="visualmarkdown-modal" data-visualmarkdown-modal="pagelink">
    <div class="visualmarkdown-modal-wrap">
        <h3 class="visualmarkdown-modal-title">
            <?= $field->lang('modal.shortcuts.action.pagelink', 'Choose page') ?>
        </h3>
        
        <div class="pages">
          <div class="rootpages">
            <? 
            $subpages = site()->children();
            function listpages($subpages) {
              foreach ($subpages as $subpage) {
                echo('<div class="page"><div class="pagename">');
                echo('<span class="name">' . $subpage->title() . '</span>');
                if ($subpage->num() != "") $number = $subpage->num();
                else $number = "–";
                echo('<span class="number smallbox">' . $number . '</span>');
                if($subpage->children()->count() > 0) echo('<span class="slidedown active smallbox smalllink"><i class="icon fa fa-angle-down"></i></span>');
                else echo('<span class="slidedown smallbox smalllink">–</span>');
                echo('</div><div class="subpages d' . $subpage->depth() . '" style="background-color: rgba(0,0,0,' . $subpage->depth()/25 . ')">');
                if($subpage->children()->count() > 0)listpages($subpages = $subpage->children());
                echo('</div></div>');
              }
            }
            listpages($subpages = site()->children());
            ?>
          </div>
        </div>
        
    </div>
</div>