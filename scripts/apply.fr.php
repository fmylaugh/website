<?php
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Soumission de formulaire d\'équipe',
	'heading' => 'Nouvelle soumission de formulaire',
	'success_redirect' => '/equipe/',
	'resources' => array(
		'checkbox_checked' => 'Coché',
		'checkbox_unchecked' => 'Décoché',
		'submitted_from' => 'Formulaire soumis depuis le site Web: %s',
		'submitted_by' => 'Adresse IP du visiteur: %s',
		'too_many_submissions' => 'Trop de soumissions récentes de cette adresse IP',
		'failed_to_send_email' => 'Échec d'envoi d'un e-mail',
		'invalid_reCAPTCHA_private_key' => 'Clé privée reCAPTCHA non valide.',
		'invalid_reCAPTCHA2_private_key' => 'Clé privée reCAPTCHA 2.0 non valide.',
		'invalid_reCAPTCHA2_server_response' => 'Réponse du serveur reCAPTCHA 2.0 non valide.',
		'invalid_field_type' => 'Type \'%s\' Type de champ inconnu.',
		'invalid_form_config' => 'Le champ \'%s\' a une configuration invalide.',
		'unknown_method' => 'Méthode de demande de serveur inconnu'
	),
	'email' => array(
		'from' => 'noreply@terracoin.io',
		'to' => 'support@terracoin.io'
	),
	'fields' => array(
		'name' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nom',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ \'Nom\' est obligatoire.'
			)
		),
		'email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ \'Email\' est obligatoire.',
				'format' => 'Le champ \'Email\' a un email invalide.'
			)
		),
		'message' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
