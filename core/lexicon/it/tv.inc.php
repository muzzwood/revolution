<?php
/**
 * TV English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['example_tag_tvname'] = 'NameOfTV';
$_lang['has_access'] = 'Ha Accesso?';
$_lang['filter_by_category'] = 'Filtra per Categoria...';
$_lang['rank'] = 'Rango';
$_lang['rendering_options'] = 'Opzioni Interpretazione';
$_lang['tv'] = 'TV';
$_lang['tvs'] = 'Viariabili di Template (TV)';
$_lang['tv_binding_msg'] = 'Questo campo supporta associazioni a dati di orignine utilizzando i comandi @';
$_lang['tv_caption'] = 'Didascalia';
$_lang['tv_caption_desc'] = 'The label shown for this TV in Resource editing pages (can be overridden per template or other criteria using <a href="?a=security/forms" target="_blank">Form Customization</a>).';
$_lang['tv_category_desc'] = 'Use to group TVs in Resource editing pages and within the Elements tree.';
$_lang['tv_change_template_msg'] = 'Modificare questo modello causerà alla pagina di ricaricare le TV, perdendo ogni modifica non salvata.<br /><br />Sei sicuro di voler modificare questo modello?';
$_lang['tv_delete_confirm'] = 'Sei sicuro di che voler eliminare questa TV?';
$_lang['tv_description'] = 'Descrizione';
$_lang['tv_description_desc'] = 'Usage information for this TV shown next its caption in Resource editing pages and as a tooltip in the Elements tree.';
$_lang['tv_err_delete'] = 'Si è verificato un errore provando a eliminare la TV.';
$_lang['tv_err_duplicate'] = 'Si è verificato un errore provando a duplicare la TV.';
$_lang['tv_err_duplicate_templates'] = 'Si è verificato un errore durante la duplicazione dei templates delle TV.';
$_lang['tv_err_duplicate_documents'] = 'Si è verificato un errore durante la duplicazione dei documenti delle TV.';
$_lang['tv_err_duplicate_documentgroups'] = 'Si è verificato un errore durante la duplicazione dei gruppi di documenti delle TV.';
$_lang['tv_err_ae'] = 'Una TV esiste già con il nome "[[+name]]".';
$_lang['tv_err_invalid_name'] = 'Nome della TV non valido.';
$_lang['tv_err_invalid_id_attr'] = 'HTML ids must not begin with a number or contain any white space.';
$_lang['tv_err_locked'] = 'TV bloccata!';
$_lang['tv_err_nf'] = 'TV non trovata.';
$_lang['tv_err_nfs'] = 'TV non trovata con chiave: [[+id]]';
$_lang['tv_err_ns'] = 'TV non specificata.';
$_lang['tv_err_reserved_name'] = 'Una TV non può avere lo stesso nome di un campo della Risorsa.';
$_lang['tv_err_save_access_permissions'] = 'Si è verificato un errore tentando di salvare le autorizzazioni d\'accesso della TV.';
$_lang['tv_err_save'] = 'Si è verificato un errore salvando la TV.';
$_lang['tv_inuse'] = 'I seguenti documenti stanno correntemente usando questa TV. Per continuare con l\'operazione d\'eliminazione, clicca il pulsante Elimina altrimenti clicca il pulsante Annulla.';
$_lang['tv_inuse_template'] = 'I seguenti template stanno attualmente utilizzando questa TV: [[+templates]]. < br/> < br/> Scollegate la TV dal/dai template prima di eliminarli.';
$_lang['tv_lock'] = 'Restrict Editing';
$_lang['tv_lock_desc'] = 'Only users with “edit_locked” permissions can edit this TV.';
$_lang['tv_management_msg'] = 'Gestisci TV personalizzate aggiuntive per i tuoi documenti.';
$_lang['tv_name'] = 'Nome della TV';
$_lang['tv_name_desc'] = 'Place the content generated by this TV in a Resource, Template, or Chunk using the following MODX tag: <span class="copy-this">[[*<span class="example-replace-name">'.$_lang['example_tag_tvname'].'</span>]]</span>';
$_lang['tv_new'] = 'Crea TV';
$_lang['tv_novars'] = 'Nessuna TV trovata';
$_lang['tv_properties'] = 'Proprietà di default';
$_lang['tv_rank'] = 'Ordinamento';
$_lang['tv_rank_desc'] = 'Use to control the positioning of this TV in Resource editing pages (can be overridden per template or other criteria using <a href="?a=security/forms" target="_blank">Form Customization</a>).';
$_lang['tv_reset_params'] = 'Reimposta Parametri';
$_lang['tv_tab_access_desc'] = 'Select the Resource Groups that this TV belongs to. Only users with access to the Groups selected will be able to modify this TV. If no Groups are selected, all users with access to the Manager will be able to modify the TV.';
$_lang['tv_tab_general_desc'] = 'Here you can create/edit a <dfn>Template Variable</dfn> (TV). TVs must be assigned to templates in order to access them from snippets and documents.';
$_lang['tv_tab_input_options'] = 'Opzioni Input';
$_lang['tv_tab_input_options_desc'] = '<p>Here you can edit the input options for the TV, specific to the type of input render that you select.</p>';
$_lang['tv_tab_output_options'] = 'Opzioni Output';
$_lang['tv_tab_output_options_desc'] = '<p>Here you can edit the output options for the TV, specific to the type of output render that you select.</p>';
$_lang['tv_tab_sources_desc'] = 'Qui puoi assegnare le Sorgenti Media che devono essere usate per questa TV in ogni Contesto specificato. Fai doppio click sul nome della Sorgente nella griglia per cambiarla.';
$_lang['tv_tab_tmpl_access'] = 'Accesso Template';
$_lang['tv_tab_tmpl_access_desc'] = 'Select the templates that are allowed to access this TV.';
$_lang['tv_tag_copied'] = 'TV tag copied!';
$_lang['tv_widget'] = 'Widget';
$_lang['tv_widget_prop'] = 'Proprietà Widget';
$_lang['tvd_err_remove'] = 'Si è verificato un errore provando a eliminare la TV dal documento.';
$_lang['tvdg_err_remove'] = 'Si è verificato un errore provando a eliminare la TV dal gruppo del documento.';
$_lang['tvdg_err_save'] = 'Si è verificato un errore provando ad allegare la TV al gruppo del documento.';
$_lang['tvt_err_nf'] = 'La TV non ha accesso al modello specificato.';
$_lang['tvt_err_remove'] = 'Si è verificato un errore provando a eliminare la TV dal modello.';
$_lang['tvt_err_save'] = 'Si è verificato un errore provando ad allegare la TV al modello.';

// Temporarily match old keys to new ones to ensure compatibility
// -- fields
$_lang['tv_desc_caption'] = $_lang['tv_caption_desc'];
$_lang['tv_desc_category'] = $_lang['tv_category_desc'];
$_lang['tv_desc_description'] = $_lang['tv_description_desc'];
$_lang['tv_desc_name'] = $_lang['tv_name_desc'];
$_lang['tv_lock_msg'] = $_lang['tv_lock_desc'];
$_lang['tv_rank_msg'] = $_lang['tv_rank_desc'];

// -- tabs
$_lang['tv_access_msg'] = $_lang['tv_tab_access_desc'];
$_lang['tv_input_options'] = $_lang['tv_tab_input_options'];
$_lang['tv_input_options_msg'] = $_lang['tv_tab_input_options_desc'];
$_lang['tv_msg'] = $_lang['tv_tab_general_desc'];
$_lang['tv_output_options'] = $_lang['tv_tab_output_options'];
$_lang['tv_output_options_msg'] = $_lang['tv_tab_output_options_desc'];
$_lang['tv_sources.intro_msg'] = $_lang['tv_tab_sources_desc'];
$_lang['tv_tmpl_access'] = $_lang['tv_tab_tmpl_access'];
$_lang['tv_tmpl_access_msg'] = $_lang['tv_tab_tmpl_access_desc'];
