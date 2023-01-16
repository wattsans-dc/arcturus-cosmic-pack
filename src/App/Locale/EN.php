<?php
use Cosmic\App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Accueil',

            'nav_community'         => 'Communauté',
            'nav_news'              => 'Nouveauté',
            'nav_jobs'              => 'Jobs',
            'nav_photos'            => 'Photo',
            'nav_rarevalue'         => 'Valeur rare',
            'nav_staff'             => 'Equipes Staffs',
            'nav_team'              => 'Les Team',
            'nav_exchange'          => 'Marché',

            'nav_shop'              => 'Boutique',
            'nav_buy_points'        => Config::site['shortname'] . ' Boutique',
            'nav_buy_club'          => 'Acheter ' . Config::site['shortname'] . ' Club',
            'nav_purchasehistory'   => 'Historique dachat',
            'nav_changename'        => 'Changer ' . Config::site['shortname'] . 'name',
            'nav_drawyourbadge'     => 'Dessine ton badge',
          
            'nav_highscores'        => 'Scores élevés',

            'nav_forum'             => 'Mes groupes',

            'nav_helptool'          => 'Outil daide',
            'nav_helptickets'       => 'Billets daide',

            'nav_housekeeping'      => 'Administration',

            'close'                 => 'Fermée',
            'cookies'               => 'utilise ses propres cookies et ceux de tiers pour fournir un meilleur service et garantit également que les publicités correspondent mieux à vos préférences. Si vous utilisez notre site Web, vous acceptez notre politique en matière de cookies.',
            'read_more'             => 'Lire la suite',
            'thanks_for_playing'    => 'Merci davoir joué',
            'made_with_love'        => 'a été fait avec beaucoup damour',
            'credits'               => 'Merci à Wattsans et Nezuz',
            'and_all'               => 'Et tout',

            'login_name'            => 'Pseudo',
            'login_password'        => 'Mot de passe',
            'login_save_data'       => 'Souviens-toi de moi',
            'login_lost_password'   => 'Mot de passe perdu?',

            'report_message'        => 'Signaler ce message',
            'report_certainty'      => 'Vous êtes sur le point de signaler ce message. êtes vous sur de vouloir signaler ce message?',
            'report_inappropriate'  => 'Oui, c est inapproprié !',

            'user_to'               => 'Entrée',
            'user_profile'          => 'Moi',
            'user_settings'         => 'Parametre',
            'user_logout'           => 'Se déconnecter',

            'header_slogan'         => 'Monde virtuel pour les jeunes !',
            'header_slogan2'        => 'Rejoignez notre communauté et faites-vous de nouveaux amis',
            'header_login'          => 'Connexion',
            'header_register'       => 'Inscription gratuite!',
            'header_to'             => 'Entrée',

            'footer_helptool'       => 'Outil daide',
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
            'index_latest_activities'   => 'Latest activities',
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
            'by'          => 'by',
            'photos_by'   => 'Photos\'s by',
            'photos_desc' => 'See all the latest pictures taken by',
            'load_more'   => 'View more photos'
        ),
		'community_rares' => array (
		'desc'        => ' Most valuable furnis',
		'last_clickhere' => 'Click Here!',
		'last_edited'   => 'Last Edited: ',
		'last_editor'   => 'Last Editor: ',
		'last_rares'   => 'Last 10 Rare Published',
		'none_rare_found_desc'   => 'Maybe you are looking for',
		'none_rare_found_last'   => 'Last 10 rare',
		'none_rare_found_title'   => 'I could not find rares on this page',
		'pages_notfound'   => 'No page available',
        'rares_pages'   => 'Pages',
		'search'   => 'Search',
		'title'       => Config::site['shortname'] . ' Rares',
        'units'   => 'Units'
            
			
        ),
        'community_staff' => array (
            'title'       => 'How do I become staff at ' . Config::site['shortname'] . ' ?',
            'desc'        => 'Our staff is here to help and guide you within this hotel!',
            'content_1'   => 'Of course everyone dreams of being staff at ' . Config::site['shortname'] . ' , but unfortunately this is not for everyone. To become staff at ' . Config::site['shortname'] . '  you must apply.',
            'content_2'   => 'This is only possible at times when we have vacancies, when we have this, this is mentioned in the news.'
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
            'help_contact'              => 'Contact',
            'title'                     => 'Help Tool',
            'desc'                      => 'You can search here for answers to your questions. If you cannot find the answer to your question, submit a request.',

          /*  Help/request.html  */
            'request_closed'            => 'CLOSED',
            'request_on'                => 'On:',
            'request_ticket_amount'     => 'Amount of tickets:',
            'request_react_on'          => 'React on:',
            'request_react'             => 'React',
            'request_description'       => 'Description',
            'request_react_on_ticket'   => 'React on ticket',
            'request_contact'           => 'Contact ' . Config::site['shortname'],
            'request_contact_help'      => 'You can contact us by opening a new ticket.',
            'request_new_ticket'        => 'New ticket',
            'request_subject'           => 'Subject',
            'request_type'              => 'Type',
            'request_status'            => 'Ticket opened',
            'request_in_treatment'      => 'In treatment',
            'request_open'              => 'Open',
            'request_closed'            => 'Closed'
        ),
        'help_new' => array (
            'title'         => 'My ticket',
            'subject'       => 'Subject',
            'description'   => 'Description',
            'open_ticket'   => 'Open a ticket'
        ),

        /*     App/View/Home     */
        'home' => array (
            'to'                      => 'To',
            'friends_online'          => 'Online friends',
            'now_in'                  => 'Now in',
            'latest_news'             => 'Latest news',
            'latest_facts'            => 'The latest facts within ' . Config::site['shortname'] . '!',
            'popular_rooms'           => 'Popular rooms',
            'popular_rooms_label'     => 'Know which rooms are trending within '. Config::site['shortname'] . '!',
            'popular_no_rooms'        => 'There is nobody inside our Hotel!!',
            'goto_room'               => 'Goto room',
            'popular_groups'          => 'Popular groups',
            'popular_groups_label'    => 'Who do you want to join?',
            'popular_no_groups'       => 'No groups have been created yet!',
            'load_news'               => 'Load more news',
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
            'sidebar_stats_label_2'   => 'Highscores',
            'sidebar_rooms'           => 'Popular rooms?',
            'sidebar_rooms_label_1'   => 'Browse the',
            'sidebar_rooms_label_2'   => 'Navigator',
            'sidebar_else'            => 'I have lost my slippers!',
            'sidebar_else_label'      => 'Then you really have to search better! :-)'
        ),
        'profile' => array (
            'overlay_search'        => 'Who are you looking for?',
            'since'                 => 'since',
            'currently'             => 'Currently',
            'never_online'          => 'Not online yet',
            'last_visit'            => 'Last visit',
            'guestbook_title'       => 'Guestbook',
            'guestbook_label'       => 'Do you leave something?',
            'guestbook_input'       => 'What are you doing,',
            'guestbook_input_1'     => 'What do you want',
            'guestbook_input_2'     => 'to know?',
            'guestbook_load_more'   => 'Load more messages',
            'badges_title'          => 'Badges',
            'badges_label'          => 'Random badges that I can wear',
            'badges_empty'          => 'Hasn\'t set any badges yet',
            'friends_title'         => 'Friends',
            'friends_label'         => 'Random friends in my list',
            'friends_empty'         => 'Hasn\'t made any friends yet',
            'groups_title'          => 'Groups',
            'groups_label'          => 'See what I love!',
            'groups_empty'          => 'Hasn\'t joined a group yet',
            'rooms_title'           => 'Rooms',
            'rooms_label'           => 'My last created rooms',
            'rooms_empty'           => 'Hasn\'t created any rooms yet',
            'photos_title'          => 'Photos',
            'photos_label'          => 'Will you take a picture with me?',
            'photos_empty'          => 'Hasn\'t taken any photos yet',
            'title'                 => 'Profile'
        ),
        'registration' => array (
            'title'                 => 'Enter your information!',
            'email'                 => 'E-mail address',
            'email_fill'            => 'Enter your e-mail address here...',
            'email_help'            => 'We will need this information to restore your account in case you lose access.',
            'password'              => 'Password',
            'password_fill'         => 'Password...',
            'password_repeat'       => 'Repeat password',
            'password_repeat_fill'  => 'Repeat password...',
            'password_help_1'       => 'Your password must be at least 6 characters long and contain letters and numbers.',
            'password_help_2'       => 'Make sure your password is different than on other websites!',
            'birthdate'             => 'Date of birth',
            'day'                   => 'Day',
            'month'                 => 'Month',
            'year'                  => 'Year',
            'birthdate_help'        => 'We will need this information to restore your account in case you lose access.',
            'found'                 => 'How did you find ' . Config::site['shortname'] . ' Hotel?',
            'found_choose'          => 'Make a choice...',
            'found_choose_1'        => 'Google',
            'found_choose_2'        => 'By a friend',
            'found_choose_3'        => 'By another game',
            'found_choose_4'        => 'By Facebook',
            'found_choose_5'        => 'Other',
            'create_user'           => 'Create your ' . Config::site['shortname'] . '!',
            'username'              =>  Config::site['shortname'] . 'name',
            'username_fill'         =>  Config::site['shortname'] . 'name...',
            'username_help'         => 'Your unique name in ' . Config::site['shortname'] . ' Hotel.',
            'sex'                   => 'Sex',
            'male'                  => 'Boy',
            'female'                => 'Girl',
            'register'              => 'Register',
            'header_slogan2'        => 'Join our community and make new friends'
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
            'title'                 => 'Forgot your password?',
            'content_1'             => 'Enter your ' . Config::site['shortname'] . 'name and e-mail address below and we will send you a link by e-mail to change your password.',
            'content_2'             => 'Don\'t do this if someone asks you to do this!',
            'username'              =>  Config::site['shortname'] . 'name',
            'email'                 => 'E-mail address',
            'send'                  => 'Send e-mail',
            'wrong_page'            => 'False alarm!',
            'wrong_page_content_1'  => 'If you remember your password - or ended up here by accident - you can use the link below to return to the homepage.',
            'back_to_home'          => 'Back to the homepage'
        ),
        'password_reset' => array (
            'title'                     => 'Change Password',
            'new_password'              => 'New password',
            'new_password_fill'         => 'Enter your new password...',
            'new_password_repeat_fill'  => 'Please re-enter your password...',
            'change_password'           => 'Change password'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'My preferences',
            'password'       => 'Change password',
            'verification'   => 'Set verification',
            'email'          => 'Change e-mail address',
            'namechange'     => 'Change ' . Config::site['shortname'] . 'name',
            'shop_history'   => 'Purchase history'
        ),
        'settings_email' => array (
            'title'           => 'Change e-mail',
            'email_title'     => 'E-mail address',
            'email_label'     => 'Your e-mail address is required to restore your account in case you lose access.',
            'password_title'  => 'Current password',
            'fill_password'   => 'Enter your current password...',
            'save'            => 'Save'
        ),
        'settings_namechange' => array (
            'title'           => 'Change ' . Config::site['shortname'] . 'name',
            'help_1'          => 'Do you want to change your ' . Config::site['shortname'] . 'name? Which can! This costs',
            'help_2'          => 'and will be debited immediately after your request. Once your name has been changed we cannot reverse it! So make sure you think carefully about your decision!',
            'fill_username'   =>  Config::site['shortname'] . 'name...',
            'request'         => 'Request'
        ),
        'settings_password' => array (
            'title'                     => 'Change password',
            'password_title'            => 'Current password',
            'fill_password'             => 'Enter your current password...',
            'newpassword_title'         => 'New password',
            'fill_newpassword'          => 'Enter your new password here...',
            'fill_newpassword_repeat'   => 'Repeat your new password...',
            'help'                      => 'Your password must be at least 6 characters long and contain letters and numbers.',
            'save'                      => 'Save'
        ),
        'settings_preferences' => array (
            'title'               => 'My preferences',
            'follow_title'        => 'Follow function - who can follow you?' ,
            'follow_label'        => 'I don\'t want ' . Config::site['shortname'] . '\'s to follow me',
            'friends_title'       => 'Friend requests',
            'friends_label'       => 'Allow friendship requests?',
            'room_title'          => 'Room invites',
            'room_label'          => 'I don\'t want to be invited to rooms',
            'hotelalerts_title'   => 'Hotel alerts',
            'hotelalerts_label'   => 'I don\'t want to receive hotel notifications',
            'chat_title'          => 'Chat settings',
            'chat_label'          => 'I want to use the old chat'
        ),
        'settings_verification' => array (
            'title'                 => 'Secure your account',
            'help'                  => 'This check increases the security of your account. When you log in, you must, depending on your preferences, answer the security questions you have defined or enter a code generated by your application.',
            'password_title'        => 'Enter your password',
            'auth_title'            => 'Two-step verification',
            'auth_label'            => 'Secure your account with two-step verification',
            'method_title'          => 'Verification method',
            'method_choose'         => 'Choose your verification method...',
            'method_pincode'        => 'I want to set a pin code',
            'method_auth_app'       => 'I want to use Google 2FA',
            'pincode_title'         => 'Pincode security',
            'pincode_label'         => 'Put a pincode on your account as extra security, with this you ensure better protection of your account against hackers.',
            'fill_pincode'          => 'Enter your pincode',
            'generate_auth'         => 'Code generation by 2FA',
            'generate_auth_label'   => 'This method is the most reliable. It links your ' . Config::site['shortname'] . ' account to an authentication application (Google Authenticator) on your phone. When you sign up, all you have to do is enter the code generated by your app.',
            'link_account'          => 'Link your account',
            'link_account_label'    => 'To link your account, simply scan this QR code with your application and then click save to validate this change.',
            'save'                  => 'Save'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Club benefits',
            'club_buy'            => 'Purchase ' . Config::site['shortname'] . ' Club',
            'unlimited'           => 'Unlimited',
            'more_information'    => 'More information',
            'content_1'           => 'Do you have a question or problem with a purchase?',
            'content_2'           => 'Do not hesitate to contact customer service via the',
            'help_tool'           =>  Config::site['shortname'] . ' Help Tool',
            'random_club_users'   => 'Random ' . Config::site['shortname'] . ' Club members',
            'desc'                => 'Here you can buy ' . Config::site['shortname'] . ' club for real money. With club you can buy exclusive items.'
        ),
        'shop_history' => array (
            'buy_history'         => 'Purchase history',
            'product'             => 'Product',
            'date'                => 'Date',
            'buy_history_empty'   => 'You do not have a purchase history yet.',
            'buy_club'            => 'Purchase ' . Config::site['shortname'] . ' Club',
            'content_1'           => 'Do you have a question or problem with a purchase?',
            'content_2'           => 'Do not hesitate to contact customer service via the',
            'help_tool'           =>  Config::site['shortname'] . ' Help Tool',
            'title'               => 'My Purchase history',
            'desc'                => 'You see here all the purchases you have made',
            'title_draw'          => 'Draw your badge',
            'draw_desc'           => 'Draw your own badge for points'
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
            'title'             => 'Select a product',
            'country'           => 'Country:',
            'netherlands'       => 'Netherlands',
            'belgium'           => 'Belgium',
            'super_rare'        => 'Super rare',
            'more_information'  => 'More information',
            'content_1'         => 'Do you have a question or problem with a purchase?',
            'content_2'         => 'Do not hesitate to contact customer service via the',
            'help_tool'         =>  Config::site['shortname'] . ' Help Tool',
            'not_logged'        => 'Oops! You\'re not logged in.',
            'have_to_login'     => 'You must be logged in to visit the ' . Config::site['shortname'] . ' Shop.',
            'click_here'        => 'Click here',
            'to_login'          => 'to log in.',
            'store'             => 'Store',
            'desc'              => 'Here you can buy credits for real money, with this you can buy exclusive items in our catalogue',
            'get'               => 'You earn'
        ),
        'games_ranking' => array(
            'title'             => 'Highscores',
            'desc'              => 'On this you find all the high scores of our players!'
        )
    ),
    'core' => array (
        'belcredits' => 'GOTW-Points',
        'hotelapi' => array (
            'disabled' => 'Cannot process request because the hotelapi is turned off!'
        ),
        'dialog' => array (
            'logged_in'             => 'Oops to visit this page you must be logged in!',
            'not_logged_in'         => 'You do not have to be logged in to visit this page!'
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
            'home'              => 'Make friends, play games, make rooms and stand out!',
            'lost'              => 'Page not found!',
            'registration'      => 'Register for free!',
            'hotel'             => 'Hotel',

            'password' => array (
                'claim'    => 'Forgot password?',
                'reset'    => 'Change password',
            ),
            'settings' => array (
                'index'         => 'My preferences',
                'password'      => 'Change password',
                'email'         => 'Change e-mail',
                'namechange'    => 'Change ' . Config::site['shortname'] . 'name'
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
                'ranking'   => 'Highscores'
            ),
            'shop' => array (
                'index'     =>  Config::site['shortname'] . ' Store',
                'history'   => 'Purchase history',
                'club'      =>  Config::site['shortname'] . ' Club'
            ),
            'help' => array (
                'index'     => 'Help Tool',
                'requests'  => 'Help Tickets',
                'new'       => 'Open Help Ticket'
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
        'invalid_password'          => 'Invalid password.',
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
