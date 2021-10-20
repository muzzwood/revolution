<?php
/**
 * TV Widget English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['attributes'] = 'Atribut';
$_lang['attr_attr_desc'] = 'One or more space-separated attributes to add to this element’s tag (for example, <span class="example-input">rel="external" type="application/pdf"</span>).';
$_lang['attr_class_desc'] = 'One or more space-separated CSS class names.';
$_lang['attr_style_desc'] = 'CSS definitions (for example, <span class="example-input">color:#f36f99; text-decoration:none;</span>).';
$_lang['attr_target_blank'] = 'Blank';
$_lang['attr_target_parent'] = 'Parent';
$_lang['attr_target_self'] = 'Self';
$_lang['attr_target_top'] = 'Top';
$_lang['attr_target_desc'] = 'Indicates in which window/tab or frame the linked url should open. To target a specific frame, enter its name in place of one of the provided options.';
$_lang['capitalize'] = 'Memanfaatkan';
$_lang['checkbox'] = 'Kotak centang';
$_lang['checkbox_columns'] = 'Kolom';
$_lang['checkbox_columns_desc'] = 'Jumlah kolom kotak centang yang ditampilkan dalamnya.';
$_lang['class'] = 'Kelas';
$_lang['classes'] = 'Class(es)';
$_lang['combo_allowaddnewdata'] = 'Memungkinkan menambahkan item baru';
$_lang['combo_allowaddnewdata_desc'] = 'Bila ya, memungkinkan item yang akan ditambahkan belum ada dalam daftar. Default dibatalkan/dihentikan.';
$_lang['combo_forceselection'] = 'Require Match';
$_lang['combo_forceselection_desc'] = 'Only save typed option when it matches one already defined in the list.';
$_lang['combo_forceselection_multi_desc'] = 'If this is set to Yes, only items already in the list are allowed. If No, new values can be entered a well.';
$_lang['combo_listempty_text'] = 'Option Not Found Message';
$_lang['combo_listempty_text_desc'] = 'Message to display when typed text does not match existing options.';
$_lang['combo_listheight'] = 'Daftar tinggi';
$_lang['combo_listheight_desc'] = 'The height, in % or px, of the dropdown list itself. Defaults to the height of the combobox.';
$_lang['combo_listwidth'] = 'Lebar daftar';
$_lang['combo_listwidth_desc'] = 'The width, in % or px, of the dropdown list itself. Defaults to the width of the combobox.';
$_lang['combo_maxheight'] = 'Tinggi Maksimum';
$_lang['combo_maxheight_desc'] = 'The maximum height in pixels of the dropdown list before scrollbars are shown. (Default: 300)';
$_lang['combo_stackitems'] = 'Tumpukan item yang terpilih';
$_lang['combo_stackitems_desc'] = 'Bila diatur ke Ya, item akan disusun 1 per baris. Default untuk tidak, yang menampilkan inline item.';
$_lang['combo_title'] = 'Daftar Header';
$_lang['combo_title_desc'] = 'Jika disediakan, elemen header yang dibuat berisi teks ini dan ditambahkan ke bagian atas daftar dropdown.';
$_lang['combo_typeahead'] = 'Mengaktifkan type-ahead';
$_lang['combo_typeahead_desc'] = 'Populate and autoselect options that match as you type after a configurable delay. (Default: No)';
$_lang['combo_typeahead_delay'] = 'Delay';
$_lang['combo_typeahead_delay_desc'] = 'Milliseconds before a matched option is shown. (Default: 250)';
$_lang['date'] = 'Tanggal';
$_lang['date_format'] = 'Format tanggal';
$_lang['date_format_desc'] = 'Enter a format using <a href="https://www.php.net/strftime" target="_blank">php’s strftime syntax</a>.
    <div class="example-list">Common examples include:
        <ul>
            <li><span class="example-input">[[+example_1a]]</span> ([[+example_1b]]) (default format)</li>
            <li><span class="example-input">[[+example_2a]]</span> ([[+example_2b]])</li>
            <li><span class="example-input">[[+example_3a]]</span> ([[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> ([[+example_4b]])</li>
            <li><span class="example-input">[[+example_5a]]</span> ([[+example_5b]])</li>
            <li><span class="example-input">[[+example_6a]]</span> ([[+example_6b]])</li>
            <li><span class="example-input">[[+example_7a]]</span> ([[+example_7b]])</li>
        </ul>
    </div>
';
$_lang['date_use_current'] = 'Use Current Date as Fallback';
$_lang['date_use_current_desc'] = 'When a value for this TV is not required (Allow Blank = “Yes”) and a Default Date is not specified, setting this option to “Yes” will display the current date.';
$_lang['default'] = 'Standar';
$_lang['default_date_now'] = 'Today with Current Time';
$_lang['default_date_today'] = 'Today (midnight)';
$_lang['default_date_yesterday'] = 'Yesterday (midnight)';
$_lang['default_date_tomorrow'] = 'Tomorrow (midnight)';
$_lang['default_date_custom'] = 'Custom (see description below)';
$_lang['delim'] = 'Pembatas';
$_lang['delimiter'] = 'Pembatas';
$_lang['delimiter_desc'] = 'One or more characters used to separate values (applicable to TVs supporting mutliple chooseable options).';
$_lang['disabled_dates'] = 'Tanggal dinonaktifkan';
$_lang['disabled_dates_desc'] = 'A comma-separated, javascript <abbr title="regular expression">regex</abbr>-compatible list (minus delimiters) of dates in the manager’s date format (currently “[[+format_current]]”).
    <p>Examples using the default format (“[[+format_default]]”) include:</p>
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (selects individual dates)</li>
            <li><span class="example-input">[[+example_2a]]</span> (selects [[+example_2b]] and [[+example_2c]] of every year)</li>
            <li><span class="example-input">[[+example_3a]]</span> (“^” to match beginning of string; this selects all of [[+example_3b]])</li>
            <li><span class="example-input">[[+example_4a]]</span> (selects every day in [[+example_4b]])</li>
            <li><span class="example-input">[[+example_5]]</span> (“$” to match end of string; this selects every day in March of every year)</li>
        </ul>
        Note: If your date format uses dot separators they will need to be escaped (e.g., “[[+example_6a]]” should be entered above as “[[+example_6b]]”).
    </div>
';
$_lang['disabled_days'] = 'Non aktifkan hari';
$_lang['disabled_days_desc'] = '';
$_lang['dropdown'] = 'Daftar DropDown Menu';
$_lang['earliest_date'] = 'Tanggal paling awal';
$_lang['earliest_date_desc'] = 'Tanggal yang paling awal yang bisa dipilih.';
$_lang['earliest_time'] = 'Awal waktu';
$_lang['earliest_time_desc'] = 'Waktu yang paling awal yang bisa dipilih.';
$_lang['email'] = 'Email';
$_lang['file'] = 'File';
$_lang['height'] = 'Tinggi';
$_lang['hidden'] = 'Tersembunyi';
$_lang['hide_time'] = 'Hide Time Option';
$_lang['hide_time_desc'] = 'Removes the ability to choose a time from this TV’s date picker.';
$_lang['htmlarea'] = 'HTML Area';
$_lang['htmltag'] = 'HTML yang ditandai';
$_lang['image'] = 'Gambar';
$_lang['image_alt'] = 'Teks alternatif';
$_lang['latest_date'] = 'Tanggal terakhir';
$_lang['latest_date_desc'] = 'Tanggal terakhir yang bisa dipilih.';
$_lang['latest_time'] = 'Waktu terakhir';
$_lang['latest_time_desc'] = 'Waktu terakhir yang bisa dipilih.';
$_lang['listbox'] = 'Listbox (Single-pilih)';
$_lang['listbox-multiple'] = 'Listbox (multi pilih)';
$_lang['lower_case'] = 'Huruf kecil';
$_lang['max_length'] = 'Panjang Maksimum';
$_lang['min_length'] = 'Panjang minimum';
$_lang['regex_text'] = 'Error pada Regular Expression';
$_lang['regex_text_desc'] = 'The message to show if the user enters text that is invalid according to the <abbr title="regular expression">regex</abbr> validator.';
$_lang['regex'] = 'Validator untuk Regular Expression';
$_lang['regex_desc'] = 'A javascript <abbr title="regular expression">regex</abbr>-compatible string (minus delimiters) to restrict the content of this TV. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (pattern for U.S. zip codes)</li>
            <li><span class="example-input">[[+example_2]]</span> (allow only letters)</li>
            <li><span class="example-input">[[+example_3]]</span> (allow all characters except numbers)</li>
            <li><span class="example-input">[[+example_4]]</span> (must end with the string “-XP”)</li>
        </ul>
    </div>
';
$_lang['name'] = 'Nama';
$_lang['number'] = 'Nomor';
$_lang['number_allowdecimals'] = 'Memungkinkan desimal';
$_lang['number_allownegative'] = 'Allow Negative';
$_lang['number_decimalprecision'] = 'Precision';
$_lang['number_decimalprecision_desc'] = 'The maximum number of digits allowed after the decimal separator. (Default: 2)';
/* See note in number inputproperties config re separators */
$_lang['number_decimalseparator'] = 'Separator';
$_lang['number_decimalseparator_desc'] = 'The character used as the decimal separator. (Default: “.”)';
$_lang['number_maxvalue'] = 'Nilai maksimal';
$_lang['number_minvalue'] = 'Nilai minimal';
$_lang['option'] = 'Opsi radio';
$_lang['parent_resources'] = 'Sumber daya induk';
$_lang['radio_columns'] = 'Kolom';
$_lang['radio_columns_desc'] = 'The number of columns the radio buttons are displayed in.';
$_lang['rawtext'] = 'Teks mentah (sudah ditinggalkan)';
$_lang['rawtextarea'] = 'Textarea mentah (sudah ditinggalkan)';
$_lang['required'] = 'Biarkan kosong';
$_lang['required_desc'] = 'Select “No” to make this TV a required field in the Resources it’s assigned to. (Default: “Yes”)';
$_lang['resourcelist'] = 'Daftar sumber daya';
$_lang['resourcelist_depth'] = 'Kedalaman';
$_lang['resourcelist_depth_desc'] = 'The number of subfolders to drill down into for this lising’s search query. (Default: 10)';
$_lang['resourcelist_forceselection_desc'] = 'Disabled; only list matches are valid.';
$_lang['resourcelist_includeparent'] = 'Termasuk induk';
$_lang['resourcelist_includeparent_desc'] = 'Select “Yes” to include the Resources specified in the Parents field in the list.';
$_lang['resourcelist_limitrelatedcontext'] = 'Batas untuk konteks terkait';
$_lang['resourcelist_limitrelatedcontext_desc'] = 'Select “Yes” to only include the Resources related to the context of the current Resource.';
$_lang['resourcelist_limit'] = 'Batas';
$_lang['resourcelist_limit_desc'] = 'The maximum number of Resources shown in this TV’s listing. (Default: 0, meaning unlimited)';
$_lang['resourcelist_listempty_text_desc'] = 'Disabled; selections will always match the list.';
$_lang['resourcelist_parents'] = 'Induk';
$_lang['resourcelist_parents_desc'] = 'If specified, this TV’s listing will include only the child resources from this comma-separated set of resource IDs (containers).';
$_lang['resourcelist_where'] = 'Kondisi dimana';
$_lang['resourcelist_where_desc'] = '
    <p>A JSON object of one or more Resource fields to filter this TV’s listing of Resources.</p>
    <div class="example-list">Some examples:
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (only include Resources with template 4 applied)</li>
            <li><span class="example-input">[[+example_2]]</span> (include all Resources, except for those named “Home”)</li>
            <li><span class="example-input">[[+example_3]]</span> (include only Resources whose Resource Type is Weblink or Symlink)</li>
            <li><span class="example-input">[[+example_4]]</span> (include only Resources that are published and are not containers)</li>
        </ul>
    </div>
    <p>Note: Filtering by TV values is not supported.</p>
';
$_lang['richtext'] = 'Editor RichText';
$_lang['sentence_case'] = 'Kalimat kasus';
$_lang['start_day'] = 'Mulailah hari';
$_lang['start_day_desc'] = 'Day displayed as the beginning of the week in this TV’s date picker. (Default: “Sunday”)';
$_lang['string'] = 'rangkaian';
$_lang['string_format'] = 'Rangkaian Format';
$_lang['style'] = 'Gaya';
$_lang['tag_name'] = 'Nama tag';
$_lang['target'] = 'Target';
$_lang['text'] = 'Teks';
$_lang['textarea'] = 'Textarea';
$_lang['textareamini'] = 'Textarea (Mini)';
$_lang['textbox'] = 'Textbox';
$_lang['time_increment'] = 'kenaikan waktu';
$_lang['time_increment_desc'] = 'The number of minutes between each time value in the list. (Default: 15)';
$_lang['title'] = 'Judul';
$_lang['tv_default'] = 'Default Value';
$_lang['tv_default_desc'] = 'The content this TV will show if user-entered content is not provided.';
$_lang['tv_default_checkbox_desc'] = 'A double-pipe-separated set of option(s) selected for this TV if the user does not check one or more. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One, or “1||3” for Option One and Option Three)';
$_lang['tv_default_date'] = 'Default Date and Time';
$_lang['tv_default_date_desc'] = 'The date to show if the user does not provide one. Choose a relative date from the list above or enter a different date using one of the following patterns:
    <div class="example-list">
        <ul>
            <li><span class="example-input">[[+example_1]]</span> (number respresents hours ago)</li>
            <li><span class="example-input">[[+example_2]]</span> (number represents hours in the future)</li>
            <li><span class="example-input">[[+example_3]]</span> (a specific date [and time if desired] using the format shown)</li>
        </ul>
        Note: The use of the “+” and “-” shown above is counter-intuitive, but correct (“+” represents backward in time).
    </div>';
$_lang['tv_default_email'] = 'Default Email Address';
$_lang['tv_default_email_desc'] = 'The email address this TV will show if the user does not provide one.';
$_lang['tv_default_file'] = 'Default File';
$_lang['tv_default_file_desc'] = 'The file path this TV will show if the user does not provide one.';
$_lang['tv_default_image'] = 'Default Image';
$_lang['tv_default_image_desc'] = 'The image path this TV will show if the user does not provide one.';
$_lang['tv_default_option'] = 'Default Option';
$_lang['tv_default_option_desc'] = 'The option selected for this TV if the user does not choose one. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One)';
$_lang['tv_default_options'] = 'Default Option(s)';
$_lang['tv_default_options_desc'] = 'A double-pipe-separated set of option(s) selected for this TV if the user does not choose one or more. If your options include labels (e.g., Option One==1||Option Two==2||Option Three==3), be sure to enter the value (i.e., “1” for Option One, or “1||3” for Option One and Option Three)';
$_lang['tv_default_radio_desc'] = $_lang['tv_default_option_desc'];
$_lang['tv_default_listbox_desc'] = $_lang['tv_default_option_desc'];
$_lang['tv_default_listbox-multiple_desc'] = $_lang['tv_default_options_desc'];
$_lang['tv_default_number'] = 'Default Number';
$_lang['tv_default_number_desc'] = 'The number this TV will show if the user does not provide one.';
$_lang['tv_default_resource'] = 'Default Resource (ID)';
$_lang['tv_default_resourcelist_desc'] = 'The resource this TV will show if the user does not choose one.';
$_lang['tv_default_tag'] = 'Default Tag(s)';
$_lang['tv_default_tag_desc'] = 'A comma-separated set of option(s) selected for this TV if the user does not choose one or more. If your options include labels (e.g., Tag One==1||Tag Two==2||Tag Three==3), be sure to enter the value (i.e., “1” for Tag One, or “1,3” for Tag One and Tag Three)';
$_lang['tv_default_text'] = 'Default Text';
$_lang['tv_default_text_desc'] = 'The text content this TV will show if the user does not provide it.';
$_lang['tv_default_url'] = 'Default URL';
$_lang['tv_default_url_desc'] = 'The URL this TV will show if the user does not provide one.';
$_lang['tv_elements'] = 'Input Option Values';
$_lang['tv_elements_checkbox'] = 'Checkbox Options';
$_lang['tv_elements_listbox'] = 'Dropdown List Options';
$_lang['tv_elements_radio'] = 'Radio Button Options';
$_lang['tv_elements_tag'] = 'Tag Options';
$_lang['tv_elements_desc'] = 'Defines the selectable options for this TV, which may be manually entered or built with a one-line <a href="https://docs.modx.com/current/en/building-sites/elements/template-variables/bindings/select-binding" target="_blank">database query</a>. Some examples:
    <div class="example-list">
        <ul>
            <li><span class="example-input">Bird||Cat||Dog</span> (shorthand for Bird==Bird||Cat==Cat||Dog==Dog)</li>
            <li><span class="example-input">White==#ffffff||Black==#000000</span> (where label==value)</li>
            <li><span class="example-input">[[+example_1]]</span> (builds a list of published Resources whose assigned template id is 1)</li>
            <li><span class="example-input">[[+example_2]]</span> (builds the same list as the previous example, including a blank option)</li>
        </ul>
    </div>
    ';
$_lang['tv_elements_checkbox_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_elements_listbox_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_elements_listbox-multiple_desc'] = $_lang['tv_elements_listbox_desc'];
$_lang['tv_elements_radio_desc'] = $_lang['tv_elements_option_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_elements_tag_desc'] = $_lang['tv_elements_desc'];
$_lang['tv_daterange_elements_desc'] = 'Test options desc for daterange with example ph: [[+ex1]]';
$_lang['tv_daterange_default_text_desc'] = 'Test default text desc for daterange with example ph: [[+ex1]]';
$_lang['tv_type'] = 'Input Type';
$_lang['upper_case'] = 'Huruf besar';
$_lang['url'] = 'URL';
$_lang['url_display_text'] = 'Menampilkan teks';
$_lang['width'] = 'Lebar';

// Temporarily match old keys to new ones to ensure compatibility
$_lang['tv_default_datetime'] = $_lang['tv_default_date'];
