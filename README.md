[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/zWhrMTDz)

# TP Design patterns

- Projet vierge en PHP > 8.0 (idéalement 8.3) initialisé avec composer.
- Inspiration du projet BDE Challenge Stack PHP (sans Front).
- Définissez des scripts php "simples".
  - Programmation Orientée Objet **obligatoire**.
  - Un minimum organisé avec des dossiers et des namespaces cohérents.

## Fichiers intervenant dans chaque design pattern

- ### 1-1) Singleton  
  - src\Model\Database\DbConnection.php
  - src/Model/Mailer/MailerConnection.php
 
  *Pour tester* :
  `php -f tests/1-1-testSingleton.php`

***

- ### 1-2) Factory Method
  - src/Logger/LoginAlertInterface.php
  - src/Logger/FileLoginAlert.php
  - src/Logger/BddLoginAlert.php
  - src/Logger/EmailLoginAlert.php
  - src/Logger/Factory/LoginAlertFactory.php
  - src/Logger/Factory/FileLoginAlertFactory.php
  - src/Logger/Factory/BddLoginAlertFactory.php
  - src/Logger/Factory/EmailLoginAlertFactory.php
 
  *Pour tester* :
  `php -f tests/1-2-testFactoryMethod.php`

***

- ### 1-3) Abstract Factory
  - src/Alert/EmailAlertContent.php
  - src/Alert/SmsAlertContent.php
  - src/Alert/Factory/AlertContentFactory.php
  - src/Alert/Factory/EmailAlertContentFactory.php
  - src/Alert/Factory/SmsAlertContentFactory.php
 
  *Pour tester* :
  `php -f tests/1-3-testAbstractFactory.php`

***

- ### 1-4) Object Factory
  - src/Model/Entity/Contact/ContactFactory.php
  - src/Model/Entity/Contact/ContactInterface.php
  - src/Model/Entity/Contact/ContactFormulaire.php
  - src/Model/Entity/Contact/ContactEmail.php
 
  *Pour tester* :
  `php -f tests/1-4-testObjectFactory.php`

***

- ### 1-5) Builder
  - src/Model/Mailer/Mailer.php
  - src/Model/Mailer/MailerBuilder.php
  
  *Pour tester* :
  `php -f tests/1-5-testBuilder.php`

***

- ### 2-1) Adapter
  - src/Adapter/Event/Export/EventCsvExport.php
  - src/Adapter/Event/Export/EventJsonExport.php
  
  *Pour tester* :
  `php -f tests/2-1-testAdapter.php`

***

- ### 2-2) Decorator
  - src/Model/Entity/Event/EventInterface.php
  - src/Model/Entity/Event/OutsideEvent.php
  - src/Model/Entity/Event/SportsEvent.php
  - src/Model/Entity/Event/LimitedEvent.php
  
  *Pour tester* :
  `php -f tests/2-2-testDecorator.php`

***

- ### 2-3) Facade
  - src/Model/Controller/EventController.php
  - src/Model/Controller/UserController.php
  - src/Repository/Repository.php
  
  *Pour tester* :
  `php -f tests/2-3-testFacade.php`

***

- ### 3-1) Observer
  - src/Publisher/Publisher.php
  - src/Observer/Observer.php
  - src/Observer/EventModification.php
  
  *Pour tester* :
  `php -f tests/3-1-testObserver.php`  
  **Remarque** : Les tests n'ont pas pu aboutir au maximum pour ce design pattern, car je ne sais pas quoi mettre dans la fonction 'handle' qui se trouve dans la classe 'Publisher'

***

- ### 3-2) Strategy
  - src/Logger/LoggerWithStrategies.php
  - src/Logger/Strategy/StrategyInterface.php
  - src/Logger/Strategy/DatabaseLogStrategy.php
  - src/Logger/Strategy/FileDebugLogStrategy.php
  - src/Logger/Strategy/FileLogStrategy.php
  - src/Logger/Strategy/SendAdminEmailLogStrategy.php
  
  *Pour tester* :
  `php -f tests/3-2-testStrategy.php`

***

- ### 3-3) Template Method
  - src/Model/Entity/Participation/Participation.php
  - src/Model/Entity/Participation/AbstractValidationPartipation.php
  - src/Model/Entity/Participation/ValidationParticipationOutsideEvents.php
  - src/Model/Entity/Participation/ValidationParticipationSportsEvent.php
  
  *Pour tester* :
  `php -f tests/3-3-testTemplateMethod.php`

***
