<?php
use Cosmic\App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => '🚪 Accueil',

            'nav_community'         => '👥 Communauté',
            'nav_news'              => '🆕 Actualités',
            'nav_jobs'              => '🛠 Jobs',
            'nav_photos'            => '📸 Photo',
            'nav_rarevalue'         => '💎 Rare',
            'nav_staff'             => '🎭 Staffs',
            'nav_team'              => '👥 Equipes',
			'nav_discord'           => '🌐 Discord',
            'nav_exchange'          => 'Marché',

            'nav_shop'              => '🛒 Boutique',
            'nav_buy_points'        => '💳 Crédits ' . Config::site['shortname'],
            'nav_buy_club'          => '🛍️ Club ' . Config::site['shortname'],
            'nav_purchasehistory'   => 'Historique dachat',
            'nav_changename'        => '💭 Nom ' . Config::site['shortname'],
            'nav_drawyourbadge'     => '🛡️ Badge ' . Config::site['shortname'],
          
            'nav_highscores'        => '📊 Classement',

            'nav_forum'             => '👨‍👩‍👦 Groupes',

            'nav_helptool'          => '👩‍💻 Support',
            'nav_helptickets'       => '👩‍💻 Aide',

            'nav_housekeeping'      => '🔑 Administration',

            'close'                 => 'Fermée',
            'cookies'               => 'utilise ses propres cookies et ceux de tiers pour fournir un meilleur service et garantit également que les publicités correspondent mieux à vos préférences. Si vous utilisez notre site Web, vous acceptez notre politique en matière de cookies.',
            'read_more'             => 'Lire la suite',
            'thanks_for_playing'    => 'Toutes l\'équipe vous remercie de joué à ',
            'made_with_love'        => 'a été fait avec beaucoup d\'amour',
            'credits'               => 'Merci à Wattsans et Nezuz',
            'and_all'               => 'Toutes l\'équipe',

            'login_name'            => '',
            'login_password'        => 'Mot de passe',
            'login_save_data'       => 'Souviens-toi de moi',
            'login_lost_password'   => 'Mot de passe perdu?',

            'report_message'        => 'Signaler ce message',
            'report_certainty'      => 'Vous êtes sur le point de signaler ce message. êtes vous sur de vouloir signaler ce message?',
            'report_inappropriate'  => 'Oui, c est inapproprié !',

            'user_to'               => '🏨 HÔTEL',
            'user_profile'          => '🕵️ MON PROFIL',
            'user_settings'         => '⚙️ PARAMÈTRES',
            'user_logout'           => '🚪DÉCONNEXION',

            'header_slogan'         => 'Azbbo monde virtuel pour les grands et les petits !',
            'header_slogan2'        => 'Rejoignez notre communauté et faites-vous de nouveaux amis',
            'header_login'          => '👤 Connexion',
            'header_register'       => '📝 Inscription',
            'header_to'             => '🏨 Hôtel ',

            'footer_helptool'       => '🔖 Ticket',
            'footer_rules'          => 'Le' . Config::site['shortname'] . ' Règles',
            'footer_terms'          => 'Termes et conditions',
            'footer_privacy'        => 'Déclaration de confidentialité',
            'footer_cookies'        => 'Politique relative aux cookies',
            'footer_guide'          => 'Guide des parents'
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'Tous les champs marqués dun * sont obligatoires.',
            'web_customforms_loadingform'                   => 'Chargement du formulaire...',
            'web_customforms_next'                          => 'Prochain',
            'web_customforms_close'                         => 'Fermée',
            'web_customforms_participation'                 => 'Merci pour votre participation!',
            'web_customforms_sent'                          => 'Vos réponses ont été envoyées et seront analysées par la personne qui lance ce formulaire.',
            'web_customforms_answer'                        => 'Ta Réponse',

            'web_dialog_cancel'                             => 'Annuler',
            'web_dialog_validate'                           => 'Valider',
            'web_dialog_confirm'                            => 'Confirmez votre choix',

            'web_forum_first'                               => 'Première',
            'web_forum_previous'                            => 'Précédent',
            'web_forum_last'                                => 'Dernier',
            'web_forum_next'                                => 'Prochain',

            'web_hotel_backto'                              => 'Retour à ' . Config::site['shortname'] . ' Hotel',

            'web_fill_pincode'                              => 'Entrez le code PIN que vous avez spécifié lors de la création de la sécurité supplémentaire sur votre compte. Eh bien, jai oublié celui-ci? Alors contactez-nous via le ' . Config::site['shortname'] . ' Outil d aide',
            'web_twostep'                                   => 'Autorisation en deux étapes !',
            'web_login'                                     => 'Vous devez être connecté pour signaler ce message !',
            'web_loggedout'                                 => 'Déconnecté :(',

            'web_notifications_success'                     => 'Succès!',
            'web_notifications_error'                       => 'Erreur!',
            'web_notifications_info'                        => 'Informations!',

            'web_page_article_login'                        => 'Vous devez être connectés pour poster un commentaire!',

            'web_page_community_photos_login'               => 'Vous devez être connecté pour aimer les photos !',
            'web_page_community_photos_loggedout'           => 'Déconnecté :( ',

            'web_page_forum_change'                         => 'Changer',
            'web_page_forum_cancel'                         => 'Annuler',
            'web_page_forum_oops'                           => 'Oups...',
            'web_page_forum_topic_closed'                   => 'Ce sujet est fermé et vous ne pouvez plus y répondre.',
            'web_page_forum_login_toreact'                  => 'Pour répondre, vous devez être connecté !',
            'web_page_forum_login_tolike'                   => 'Vous devez être connecté pour aimer ce post !',
            'web_page_forum_loggedout'                      => 'Déconnecté :( ',

            'web_page_profile_login'                        => 'Vous devez être connecté pour aimer les photos !',
            'web_page_profile_loggedout'                    => 'Déconnecté :(',

            'web_page_settings_namechange_request'          => 'Demande',
            'web_page_settings_namechange_not_available'    => 'Indisponible',
            'web_page_settings_namechange_choose_name'      => 'Choisir ' . Config::site['shortname'] . 'Nom',

            'web_page_settings_verification_oops'           => 'Oups...',
            'web_page_settings_verification_fill_password'  => 'Tapez votre mot de passe!',
            'web_page_settings_verification_2fa_on'         => 'Lauthentification Google est actuellement définie sur votre compte. Pour utiliser une autre méthode de vérification, vous devez dabord supprimer votre ancienne vérification !',
            'web_page_settings_verification_2fa_secretkey'  => 'Avez-vous scanné le code QR sur votre mobile ? Entrez ensuite la clé secrète pour confirmer votre compte !',
            'web_page_settings_verification_2fa_authcode'   => 'Code d identification',
            'web_page_settings_verification_pincode_on'     => 'Vous avez actuellement un code PIN défini sur votre compte. Pour utiliser une autre méthode de vérification, vous devez d abord supprimer votre ancienne vérification !',
            'web_page_settings_verification_2fa_off'        => 'Pour désactiver lauthentification Google, nous vous demandons dentrer le code secret du générateur.',
            'web_page_settings_verification_pincode_off'    => 'Pour désactiver lauthentification par code PIN, nous vous demandons dentrer votre code PIN.',
            'web_page_settings_verification_pincode'        => 'Code PIN',
            'web_page_settings_verification_switch'         => 'Sélectionnez le bouton de commutation pour activer une méthode dauthentification !',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Payez facilement avec Paypal et vos GOTW-Points seront rechargés immédiatement.',
            'web_page_shop_offers_neosurf_dialog'           => 'Entrez votre adresse e-mail Paypal ci-dessous pour continuer.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Payez facilement avec Paypal et vos GOTW-Points seront rechargés immédiatement.',
            'web_page_shop_offers_paypal_dialog'            => 'Entrez votre adresse e-mail Paypal ci-dessous pour continuer.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Envoyez un code par SMS et recevez un code GOTW-Points.',
            'web_page_shop_offers_sms_dialog'               => 'Envoyez le code ci-dessous dans un SMS pour obtenir un code GOTW-Points.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Appelez un numéro une ou plusieurs fois pour obtenir un code GOTW-Points.',
            'web_page_shop_offers_audiotel_dialog'          => 'Appelez le numéro ci-dessous pour obtenir un code GOTW-Points.',
            'web_page_shop_offers_pay_with'                 => 'Payer avec',
            'web_page_shop_offers_points_for'               => 'Points GOTW pour',
            'web_page_shop_offers_get_code'                 => 'Obtenez un code GOTW-Points',
            'web_page_shop_offers_fill_code'                => 'Entrez votre code GOTW-Points',
            'web_page_shop_offers_fill_code_desc'           => 'Entrez votre code GOTW-Points ci-dessous pour recevoir vos GOTW-Points.',
            'web_page_shop_offers_submit'                   => 'Soumettre',
            'web_page_shop_offers_success'                  => 'Achat réussi !',
            'web_page_shop_offers_received'                 => 'Merci pour votre achat. Vous avez',
            'web_page_shop_offers_received2'                => 'Points GOTW.',
            'web_page_shop_offers_close'                    => 'fermé',
            'web_page_shop_offers_failed'                   => 'Achat raté!',
            'web_page_shop_offers_failed_desc'              => 'Lachat a échoué. Réessayez ou contactez-nous via loutil daide.',
            'web_page_shop_offers_back'                     => 'Retour',
            'web_page_shop_offers_no_card'                  => 'Si vous navez pas de carte prépayée Neosurf, vous pouvez voir le',
            'web_page_shop_offers_no_card2'                 => 'points de vente',
            'web_page_shop_offers_to'                       => 'a',
            'web_page_shop_offers_buy_code'                 => 'Acheter un code daccès',
            'web_page_hotel_loading'                        => 'est en cours de chargement...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Oups, il y a quelque chose qui ne va pas !.',
            'web_page_hotel_sometinhg_wrong_2'              => 'Recharge la page',
            'web_page_hotel_sometinhg_wrong_3'              => 'Ou créez un ticket dans loutil daide',
            'web_page_hotel_welcome_at'                     => 'Bienvenue à',
            'web_page_hotel_soon'                           => 'Prenez un verre, nous y serons bientôt...',
            'web_hotel_active_flash_1'                      => 'Vous êtes presque dans ' . Config::site['shortname'] .'!',
            'web_hotel_active_flash_2'                      => 'Cliquez ici',
            'web_hotel_active_flash_3'                      => 'et cliquez sur le côté gauche sur "autoriser" le flash pour activer le flash.',
            
        ),

        /*     App/View/Community     */
        'article' => array (
            'reactions'                 => 'commentaires',
            'reactions_empty'           => 'Il n y a pas encore de commentaires.',
            'reactions_fill'            => 'Tapez votre message ici...',
            'reactions_post'            => 'Poste',
            'latest_news'               => 'Dernières nouvelles',
            'reaction_hidden_yes'       => 'Les commentaires rendus invisibles !',
            'reaction_hidden_no'        => 'Les commentaires rendus visibles !',
            'forbidden_words'           => 'Votre message contient des mots interdits !',
        ),
        'forum' => array (
          /*  Forum/index.html  */
            'index_subject'             => 'Subject',
            'index_topics'              => 'Topics',
            'index_latest_topic'        => 'Latest topic',
            'index_empty'               => 'No topics',
            'index_latest_activities'   => 'Dernières activités',
            'index_by'                  => 'by',

          /*  Forum/category.html  */
            'category_new_topic'        => 'New topic',
            'category_back'             => 'Back',
            'category_topics'           => 'Topics',
            'category_posts'            => 'Posts',
            'category_latest_reacts'    => 'Latest reactions',
            'category_topic_by'         => 'By',
            'category_no_reacts'        => 'No reactions',
            'category_latest_react_by'  => 'Last reaction by',
            'category_create_topic'     => 'Make new topic',
            'category_subject'          => 'Subject',
            'category_description'      => 'Description',
            'category_create_button'    => 'Make topic',
            'category_or'               => 'or',
            'category_cancel'           => 'cancel',

          /*  Forum/topic.html  */
            'topic_react'               => 'React',
            'topic_close'               => 'Close',
            'topic_reopen'              => 'Re-open',
            'topic_since'               => 'Since:',
            'topic_posts'               => 'Posts:',
            'topic_topic'               => 'Topic:',
            'topic_reaction'            => 'Reaction:',
            'topic_closed'              => 'Pay attention! This topic is closed, do you disagree? Then contact us via the',
            'topic_helptool'            => 'helptool',
            'topic_and'                 => 'and',
            'topic_likes_1'             => 'others like this!',
            'topic_likes_2'             => 'likes this!',
            'topic_likes_3'             => 'like this!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'by'          => '',
            'photos_by'   => 'Photos\'s ',
            'photos_desc' => 'Voir les dernières photos ',
            'load_more'   => '📸 Voir plus de photos'
        ),
		'community_rares' => array (
		'desc'        => ' Most valuable furnis',
		'last_clickhere' => 'Cliquez ici',
		'last_edited'   => 'Last Edited: ',
		'last_editor'   => 'Last Editor: ',
		'last_rares'   => 'Les 10 dernières éditions rares',
		'none_rare_found_desc'   => 'Peut-être que vous cherchez',
		'none_rare_found_last'   => 'Les 10 derniers rares',
		'none_rare_found_title'   => 'Aucun rares trouvé sur cette page',
		'pages_notfound'   => 'Aucune page trouvé',
        'rares_pages'   => 'Pages',
		'search'   => '🔍',
		'title'       => Config::site['shortname'] . ' Rares',
        'units'   => 'Units'
            
			
        ),
        'community_staff' => array (
            'title'       => 'Comment devenir membre du personnel d\'' . Config::site['shortname'] . ' ?',
            'desc'        => 'Notre personnel est là pour vous aider et vous guider dans cet hôtel !',
            'content_1'   => 'Bien sûr, tout le monde rêve de faire partie du personnel d\'' . Config::site['shortname'] . ' , mais malheureusement, ce n\'est pas pour tout le monde. Pour devenir membre du personnel d\'' . Config::site['shortname'] . '  vous devez postuler.',
            'content_2'   => 'Cela n\'est possible que lorsque nous avons des postes vacants, lorsque nous en avons, cela est mentionné dans les nouvelles.'
        ),
        'community_value' => array (
            'title_header'      => 'Catalogue marketplace',
            'decs_header'       => 'All the exclusive furniture with a value higher than the type \'credits\' can you buy here!',
            'furni_name'        => 'Furniname',
            'furni_type'        => 'Type',
            'furni_costs'       => 'Now',
            'furni_amount'      => 'In game',
            'furni_value'       => 'Old price',
            'furni_rate'        => 'Rate',
            'looking_for'       => 'I\'m looking for..',
            'seller'            => 'Seller',
            'price'             => 'Price',
            'nav_my'            => 'My marketplace',
            'nav_shop'          => 'Marketplace',
            'nav_catalogue'     => 'Catalogue',
            'marketplace_desc'  => 'Sellers of ' . Config::site['shortname'] . ' hotel offer their stuff here that you can pay for with your currencys. Maybe you will find here exclusive items that you normally cannot buy in our catalogue!'
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
          /*  Help/help.html  */
            'help_title'                => 'FAQ',
            'help_label'                => 'Find all the answers about your questions here!',
            'help_other_questions'      => 'Other questions',
            'help_content_1'            => 'Didn\'t find the answer to your question? Do not hesitate to contact our customer service so that we can provide more information.',
            'help_contact'              => 'Service Client',
            'title'                     => 'Support',
            'desc'                      => 'Vous pouvez rechercher ici les réponses à vos questions. Si vous ne trouvez pas la réponse à votre question, ouvrez un ticket.',

          /*  Help/request.html  */
            'request_closed'            => 'CLOSED',
            'request_on'                => 'On:',
            'request_ticket_amount'     => 'Amount of tickets:',
            'request_react_on'          => 'React on:',
            'request_react'             => 'React',
            'request_description'       => 'Description',
            'request_react_on_ticket'   => 'React on ticket',
            'request_contact'           => 'Service Client ' . Config::site['shortname'],
            'request_contact_help'      => 'Vous pouvez nous contacter en ouvrant un nouveau ticket.',
            'request_new_ticket'        => '🔖 Ouvrir un ticket',
            'request_subject'           => 'Sujet',
            'request_type'              => 'Type',
            'request_status'            => 'Ticket opened',
            'request_in_treatment'      => 'In treatment',
            'request_open'              => 'Ouvert',
            'request_closed'            => 'Fermer'
        ),
        'help_new' => array (
            'title'         => 'Ticket',
            'subject'       => 'Sujet',
            'description'   => 'Description',
            'open_ticket'   => '🔖 Ouvrir un ticket'
        ),

        /*     App/View/Home     */
        'home' => array (
            'to'                      => '🏨 Entré dans',
            'friends_online'          => '👥 Amis en ligne',
            'now_in'                  => 'Maintenant dans',
            'latest_news'             => 'Dernières actualités',
            'latest_facts'            => 'Les dernières actualités d\'' . Config::site['shortname'] . ' !',
            'popular_rooms'           => 'Salles populaires',
            'popular_rooms_label'     => 'Les salons les plus populaire d\''. Config::site['shortname'] . ' !',
            'popular_no_rooms'        => 'There is nobody inside our Hotel!!',
            'goto_room'               => 'Rejoindre le salon',
            'popular_groups'          => 'Groupes populaires',
            'popular_groups_label'    => 'Qui souhaitez-vous rejoindre ?',
            'popular_no_groups'       => 'Aucun groupe n\'a encore été créé !',
            'load_news'               => '📃 Plus d\'actualités',
            'user_of_the_week'        =>  Config::site['shortname'] . ' of the week',
            'user_of_the_week_label'  => 'User of the week'
        ),
        'lost' => array (
            'page_not_found'          => 'Page not found!',
            'page_content_1'          => 'Sorry, the page you are trying to find does not exist.',
            'page_content_2'          => 'Check again if you have the correct url. If you come here again (welcome back!). Then go back to where you came from with the \'Back\' button.',
            'sidebar_title'           => 'Maybe you were looking for...',
            'sidebar_stats'           => 'The home of one of your friends?',
            'sidebar_stats_label_1'   => 'Maybe he / she is at the',
            'sidebar_stats_label_2'   => 'Classement',
            'sidebar_rooms'           => 'Popular rooms?',
            'sidebar_rooms_label_1'   => 'Browse the',
            'sidebar_rooms_label_2'   => 'Navigator',
            'sidebar_else'            => 'I have lost my slippers!',
            'sidebar_else_label'      => 'Then you really have to search better! :-)'
        ),
        'profile' => array (
            'overlay_search'        => 'Que recherchez vous ?',
            'since'                 => 'depuis le',
            'currently'             => 'Actuellement',
            'never_online'          => 'Pas encore en ligne',
            'last_visit'            => 'Dernière visite le',
            'guestbook_title'       => 'Livre d\'invité',
            'guestbook_label'       => 'Écrire une note',
            'guestbook_input'       => 'Note,',
            'guestbook_input_1'     => 'Écrire une note pour',
            'guestbook_input_2'     => '',
            'guestbook_load_more'   => 'Load more messages',
            'badges_title'          => 'Badges',
            'badges_label'          => 'Sélection des badges acquis aléatoires',
            'badges_empty'          => 'Hasn\'t set any badges yet',
            'friends_title'         => 'Amis',
            'friends_label'         => 'Sélection des amis aléatoires',
            'friends_empty'         => 'Aucun ami trouvé',
            'groups_title'          => 'Groupes',
            'groups_label'          => 'Sélection des groupes aléatoires',
            'groups_empty'          => 'Aucun groupes trouvé',
            'rooms_title'           => 'Appartement',
            'rooms_label'           => 'Derniers appartements créés',
            'rooms_empty'           => 'Aucun appartements trouvé',
            'photos_title'          => 'Photos',
            'photos_label'          => 'Sélection des photos aléatoires',
            'photos_empty'          => 'Aucune photo trouvé',
            'title'                 => 'Profile'
        ),
        'registration' => array (
            'title'                 => 'Saisissez vos informations !',
            'email'                 => 'Email',
            'email_fill'            => '',
            'email_help'            => 'Nous aurons besoin de ces informations pour restaurer votre compte en cas de perte d\'accès.',
            'password'              => 'Mot de passe',
            'password_fill'         => '',
            'password_repeat'       => 'Repéter le mot de passe',
            'password_repeat_fill'  => '',
            'password_help_1'       => 'Votre mot de passe doit comporter au moins 6 caractères et contenir des lettres et des chiffres.',
            'password_help_2'       => 'Assurez-vous que votre mot de passe est différent de celui utilisé sur d\'autres sites internet !',
            'birthdate'             => 'Date de naissance',
            'day'                   => 'Jour',
            'month'                 => 'Mois',
            'year'                  => 'Année',
            'birthdate_help'        => 'Nous aurons besoin de ces informations pour restaurer votre compte en cas de perte d\'accès.',
            'found'                 => 'Comment avez-vous trouvé ' . Config::site['shortname'] . ' Hotel?',
            'found_choose'          => 'Sélectionner',
            'found_choose_1'        => 'Google',
            'found_choose_2'        => 'Un ami',
            'found_choose_3'        => 'Un jeu',
            'found_choose_4'        => 'Facebook',
            'found_choose_5'        => 'Autres',
            'create_user'           => 'Créez votre avatar ' . Config::site['shortname'] . '!',
            'username'              =>  'Nom ' . Config::site['shortname'],
            'username_fill'         =>  '' . Config::site['shortname'],
            'username_help'         => 'Votre nom doit être unique dans ' . Config::site['shortname'] . ' Hôtel.',
            'sex'                   => 'Genre',
            'male'                  => 'Homme',
            'female'                => 'Femme',
            'register'              => 'Créer ton Avatar',
            'header_slogan2'        => 'Rejoignez notre communauté et faites-vous de nouveaux amis'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'React on the invoice',
            'content_1'           => 'Thank you for your interest in ' . Config::site['shortname'] . ' Hotel and for responding to the vacancy.',
            'content_2'           => 'Try to answer the questionnaire as accurately as possible.',
            'description'         => 'Job description',
            'question_name'       => 'What\'s your name?',
            'question_age'        => 'How old are you?',
            'question_why'        => 'Why do you think you might be suitable?',
            'question_time'       => 'How many hours are you online?',
            'question_time_help'  => 'Tell us how many hours you spend online a day at ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Monday',
            'tuesday'             => 'Tuesday',
            'wednesday'           => 'Wednesday',
            'thursday'            => 'Thursday',
            'friday'              => 'Friday',
            'saturday'            => 'Saturday',
            'sunday'              => 'Sunday',
            'time_to_time'        => 'from X to Y hours',
            'send'                => 'Send my application'
        ),
        'jobs' => array (
            'title'                   => 'List of vacancies',
            'applications'            => 'My applications',
            'available_applications'  => 'Available vacancies',
            'buildteam'               => 'Buildteam',
            'buildteam_desc'          => 'They are responsible for building (event/official) rooms.',
            'react'                   => 'React'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => 'Vous avez oublié votre mot de passe ?',
            'content_1'             => 'Entrez votre ' . Config::site['shortname'] . ' nom et adresse e-mail ci-dessous, un lien vous sera envoyées par e-mail pour changer votre mot de passe.',
            'content_2'             => 'Ne faites pas cela si quelqu\'un vous demande de le faire !',
            'username'              => 'Nom ' . Config::site['shortname'],
            'email'                 => 'Adresse e-mail',
            'send'                  => 'Envoyer par e-mail',
            'wrong_page'            => 'Fausse alerte !',
            'wrong_page_content_1'  => 'Si vous vous souvenez de votre mot de passe - ou si vous êtes arrivé ici par accident - vous pouvez utiliser le lien ci-dessous pour revenir à la page d\'accueil.',
            'back_to_home'          => 'Retour à la page d\'accueil'
        ),
        'password_reset' => array (
            'title'                     => 'Modifier le mot de passe',
            'new_password'              => 'Nouveau mot de passe',
            'new_password_fill'         => 'Entrez votre nouveau mot de passe',
            'new_password_repeat_fill'  => 'Retapez votre nouveau mot de passe',
            'change_password'           => 'Modifier le mot de passe'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Mes paramètres',
            'password'       => 'Modifier le mot de passe',
            'verification'   => 'Vérification des paramètres',
            'email'          => 'Modifier l\'adresse e-mail',
            'namechange'     => 'Changer le nom ' . Config::site['shortname'],
            'shop_history'   => 'Historique des achats'
        ),
        'settings_email' => array (
            'title'           => 'Modifier l\'adresse e-mail',
            'email_title'     => 'Adresse e-mail',
            'email_label'     => 'Votre adresse électronique est nécessaire pour restaurer votre compte en cas de perte d\'accès.',
            'password_title'  => 'Mot de passe actuel',
            'fill_password'   => '',
            'save'            => '💾 Sauvegarder'
        ),
        'settings_namechange' => array (
            'title'           => 'Changer le nom ' . Config::site['shortname'],
            'help_1'          => 'Voulez-vous changer votre nom ' . Config::site['shortname'] . ' ?',
            'help_2'          => 'sera débité immédiatement après votre demande. Une fois que votre nom a été changé, nous ne pouvons pas revenir en arrière ! Réfléchissez donc bien à votre décision !',
            'fill_username'   =>  'Nom... ' . Config::site['shortname'],
            'request'         => '🎟️ Demande de changement'
        ),
        'settings_password' => array (
            'title'                     => 'Modifier le mot de passe',
            'password_title'            => 'Mot de passe actuel',
            'fill_password'             => '',
            'newpassword_title'         => 'Nouveau mot de passe',
            'fill_newpassword'          => '',
            'fill_newpassword_repeat'   => '',
            'help'                      => 'Votre mot de passe doit comporter au moins 6 caractères et contenir des lettres et des chiffres.',
            'save'                      => '💾 Sauvegarder'
        ),
        'settings_preferences' => array (
            'title'               => 'Mes paramètres',
            'follow_title'        => 'Option suivre - qui peut vous suivre ?' ,
            'follow_label'        => 'Je ne veux pas que les ' . Config::site['shortname'] . '\'s me suive',
            'friends_title'       => 'Demandes d\'amis',
            'friends_label'       => 'Autoriser les demandes d\'amis',
            'room_title'          => 'Invitations aux salles',
            'room_label'          => 'Je ne veux pas être invité dans des salles',
            'hotelalerts_title'   => 'Alertes de l\'hôtel',
            'hotelalerts_label'   => 'Je ne veux pas recevoir de notifications concernant les hôtels.',
            'chat_title'          => 'Paramètres de discussion',
            'chat_label'          => 'Je veux utiliser l\'ancien chat'
        ),
        'settings_verification' => array (
            'title'                 => 'Activer la validation en deux étapes',
            'help'                  => 'Cette vérification permet de renforcer la sécurité de votre compte. Lorsque vous vous connectez, vous devez, selon vos préférences, répondre aux questions de sécurité que vous avez définies ou saisir un code généré par votre application.',
            'password_title'        => 'Entrez votre mot de passe',
            'auth_title'            => 'Vérification en deux étapes',
            'auth_label'            => 'Sécurisez votre compte grâce à la vérification en deux étapes',
            'method_title'          => 'Verification method',
            'method_choose'         => 'Choisissez votre méthode de vérification',
            'method_pincode'        => 'Je veux définir un code pin',
            'method_auth_app'       => 'Je veux utiliser Google 2FA',
            'pincode_title'         => 'Sécurité du code pin',
            'pincode_label'         => 'Mettez un code pin sur votre compte comme sécurité supplémentaire, vous assurez ainsi une meilleure protection de votre compte contre les pirates.',
            'fill_pincode'          => 'Entrez votre code pin',
            'generate_auth'         => 'Génération de code par 2FA',
            'generate_auth_label'   => 'Cette méthode est la plus fiable. Elle relie votre ' . Config::site['shortname'] . ' à une application d\'authentification (Google Authenticator) sur votre téléphone. Lorsque vous vous inscrivez, il vous suffit de saisir le code généré par votre application.',
            'link_account'          => 'Relier votre compte',
            'link_account_label'    => 'Pour relier votre compte, il vous suffit de scanner ce code QR avec votre application, puis de cliquer sur Enregistrer pour valider ce changement.',
            'save'                  => '💾 Sauvegarder'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Avantages',
            'club_buy'            => 'Devenir ' . Config::site['shortname'] . ' Club',
            'unlimited'           => 'Unlimited',
            'more_information'    => 'Plus d\'informations',
            'content_1'           => 'Vous avez une question ou un problème concernant un achat ?',
            'content_2'           => 'N\'hésitez pas à nous contacter via notre',
            'help_tool'           => 'Support d\'aide',
            'random_club_users'   => 'Random ' . Config::site['shortname'] . ' Club members',
            'desc'                => 'Ici, vous pouvez acheter ' . Config::site['shortname'] . ' club avec de l\'argent réel. Avec le club, vous pouvez acheter des articles exclusifs.'
        ),
        'shop_history' => array (
            'buy_history'         => 'Purchase history',
            'product'             => 'Product',
            'date'                => 'Date',
            'buy_history_empty'   => 'You do not have a purchase history yet.',
            'buy_club'            => 'Purchase ' . Config::site['shortname'] . ' Club',
            'content_1'           => 'Vous avez une question ou un problème concernant un achat ?',
            'content_2'           => 'N\'hésitez pas à nous contacter via notre',
            'help_tool'           => 'Support d\'aide',
            'title'               => 'My Purchase history',
            'desc'                => 'You see here all the purchases you have made',
            'title_draw'          => 'Dessine ton badge',
            'draw_desc'           => 'Dessinez votre propre badge pour obtenir des points'
        ),
        'shop_offers' => array (
            'back'              => 'Back',
            'buymethods'        => 'Payment methods',
            'for'               => 'for',
            'or_lower'          => 'or lower',
            'loading_methods'   => 'The payment methods are being loaded...',
            'store'             => 'Store'
        ),
        'shop' => array (
            'title'             => 'Sélectionnez un produit',
            'country'           => 'Pays:',
            'netherlands'       => 'Pays-Bas',
            'belgium'           => 'Belgique',
            'super_rare'        => 'Super rare',
            'more_information'  => 'Plus d\'informations',
            'content_1'         => 'Vous avez une question ou un problème concernant un achat ?',
            'content_2'         => 'N\'hésitez pas à nous contacter via notre ',
            'help_tool'         => 'Support d\'aide',
            'not_logged'        => 'Oops! You\'re not logged in.',
            'have_to_login'     => 'You must be logged in to visit the ' . Config::site['shortname'] . ' Shop.',
            'click_here'        => 'Cliquez ici',
            'to_login'          => 'to log in.',
            'store'             => 'Store',
            'desc'              => 'Ici, vous pouvez acheter des crédits avec de l\'argent réel, avec lesquels vous pouvez acheter des articles exclusifs dans notre catalogue.',
            'get'               => 'You earn'
        ),
        'games_ranking' => array(
            'title'             => 'Classement',
            'desc'              => 'Vous y trouverez tous les meilleurs classement Azbbo\'s !'
        )
    ),
    'core' => array (
        'belcredits' => 'GOTW-Points',
        'hotelapi' => array (
            'disabled' => 'Cannot process request because the hotelapi is turned off!'
        ),
        'dialog' => array (
            'logged_in'             => 'Pour visiter cette page vous devez être connecté.',
            'not_logged_in'         => 'Pour visiter cette page vous devez être connecté.'
        ),
        'notification' => array (
            'message_placed'        => 'Your message has been posted!',
            'message_deleted'       => 'Your message has been deleted!',
            'invisible'             => 'This is made invisible!',
            'profile_invisible'     => 'This ' . Config::site['shortname'] . ' has made his/her profile invisible.',
            'profile_notfound'      => 'Unfortunately.. we could not find the ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'You do not have permission.',
            'already_liked'         => 'You already like this!',
            'liked'                 => 'You like this!',
            'banned_1'              => 'You have been banned for breaking the ' . Config::site['shortname'] . ' Rules:',
            'banned_2'              => 'Your ban expires:',
            'something_wrong'       => 'Something went wrong, please try again.',
            'room_not_exists'       => 'This room does not exist!',
            'staff_received'        => 'Thanks! The ' . Config::site['shortname'] . ' Staff has received this!',
            'not_enough_belcredits' => 'You do not have enough gotwpoints.',
            'not_enough_points'     => 'You do not have enough points.',
            'topic_closed'          => 'You cannot respond to a topic that has been closed!',
            'post_not_allowed'      => 'You don\'t have access to create a post in this forum!',
            'draw_badge_uploaded'   => 'Your badge has been submitted and is ready for review!'
        ),
        'pattern' => array (
            'can_be'                => 'may maximum',
            'must_be'               => 'must be minimal',
            'characters_long'       => 'characters long.',
            'invalid'               => 'does not meet the requirements!',
            'invalid_characters'    => 'contains invalid characters!',
            'is_required'           => 'Fill out all fields!',
            'not_same'              => 'does not match',
            'captcha'               => 'Recaptcha was entered incorrectly!',
            'numeric'               => 'must be numeric!',
            'email'                 => 'is not valid!'
        ),
        'title' => array (
            'home'              => 'Jouez et amusez-vous !',
            'lost'              => 'Page non trouvée !',
            'registration'      => 'Inscription',
            'hotel'             => 'Hotel',

            'password' => array (
                'claim'    => 'Mot de passe oublié',
                'reset'    => 'Modifier mon mot de passe',
            ),
            'settings' => array (
                'index'         => 'Mes paramètres',
                'password'      => 'Mot de passe',
                'email'         => 'Adresse e-mail',
                'namechange'    => 'Nom ' . Config::site['shortname']
            ),
            'community' => array (
                'index'     => 'Community',
                'photos'    => 'Photo\'s',
                'staff'     =>  Config::site['shortname'] . ' Staff',
                'team'      =>  Config::site['shortname'] . ' Team',
                'fansites'  => 'Fansites',
                'value'     => 'Catalogue Marketplace',
                'forum'     => 'My Guilds'
            ),
            'games' => array (
                'ranking'   => 'Classement'
            ),
            'shop' => array (
                'index'     =>  Config::site['shortname'] . ' Store',
                'history'   => 'Purchase history',
                'club'      =>  Config::site['shortname'] . ' Club'
            ),
            'help' => array (
                'index'     => 'Support',
                'requests'  => 'Support',
                'new'       => 'Support'
            ),
            'jobs' => array (
                'index'     =>  Config::site['shortname'] . ' Vacancies',
                'apply'     => 'Respond to vacancy'
            )
        )
    ),
    'asn' => array(
        'login'                     => 'Login with VPN is not allowed!',
        'registerd'                 => 'You cannot register while using a VPN which is banned!'
    ),
    'login' => array (
        'invalid_password'          => 'Mot de passe incorrect.',
        'invalid_pincode'           => 'This pin code does not match that of this ' . Config::site['shortname'] . '!',
        'fill_in_pincode'           => 'Enter your pin code now to gain access to your account!'
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'name is contrary to the ' . Config::site['shortname'] . ' Rules.',
        'username_exists'           =>  Config::site['shortname'] . 'name is already in use :-(',
        'email_exists'              =>  'This e-mail address is already in use :-(',
        'too_many_accounts'         => 'There are too many accounts registered on this ip :-('
    ),
    'claim' => array (
        'invalid_email'             => 'This e-mail address does not match that of this ' . Config::site['shortname'] . ' ID.',
        'invalid_link'              => 'This link has expired. Request your password again to change your password.',
        'send_link'                 => 'We have just sent you an e-mail! Received nothing? Then check the junk e-mail folder.',
        'password_changed'          => 'Your password has been changed. You can now log in again!',

        'email'  => array (
            'title'                 => 'Change your password.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Your e-mail address has been changed.',
        'pincode_saved'             => 'Your pin code has been saved, you will have to log in again. See you soon! :)',
        'password_saved'            => 'Your password has been changed. You will now have to log in again. See you soon! :)',
        'preferences_saved'         => 'Your preferences have been saved!',
        'current_password_invalid'  => 'Current password does not match that of your ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Enter a new ' . Config::site['shortname'] . 'name.',
        'choose_new_pincode'        => 'Enter a new pin code.',
        'user_is_active'            => 'This ' . Config::site['shortname'] . ' may still be active!',
        'user_not_exists'           => 'This ' . Config::site['shortname'] . 'name is available and does not exist yet!',
        'invalid_secretcode'        => 'Google Authentication secret code is incorrect.',
        'enabled_secretcode'        => 'Authentication method set! You will have to log in again... see you soon!',
        'disabled_secretcode'       => 'Authentication method disabled!'
    ),
    'rcon' => array (
        'exception'                 => 'RCON can not be proceed because the emulator is turned off.'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'Transaction could not be processed!',
            'invalid_code'          => 'The code you entered is incorrect.',
            'success_1'             => 'Thank you for your purchase! You have received',
            'success_2'             => 'gotw-points.'
        ),
        'club' => array (
            'already_vip'           => 'You are an unlimited member of the ' . Config::site['shortname'] . ' Club.',
            'purchase_success'      => 'Yeah! You are now a member of the ' . Config::site['shortname'] . ' Club for 31 days.'

        ),
        'marketplace' => array(
            'expired'               => 'Item is expired, its not possible to purchase this item!',
            'purchased'             => 'Item is succesfull purchased and is now added to your inventory',
            'regards'               => 'Your item has been arrived! Friendly regards from ' . Config::site['shortname']
        ),
    ),
    'help' => array (
        'ticket_created'            => 'Your Help Ticket has been created. View your Help Tickets to view the help request.',
        'ticket_received'           => 'An ' . Config::site['shortname'] . ' Staff has responded to your Help Tool ticket. Visit the Help Tool to view the response.',
        'already_open'              => 'You still have an outstanding ticket! When this has been treated you can create a ticket again.',
        'no_answer_yet'             => 'You can only respond once an ' . Config::site['shortname'] . ' Staff has answered your ticket.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Sticky updated!',
        'is_closed'                 => 'Topic status changed!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Dashboard'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Username'
        )
    )
);
