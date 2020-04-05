<?php
// @link https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
namespace PHPSTORM_META {

	override(
		\Burzum\CakeServiceLayer\Service\ServiceAwareTrait::loadService(0),
		map([
			'Sandbox.Calculator/Post' => \Sandbox\Service\Calculator\PostService::class,
		])
	);

	override(
		\Cake\Controller\Controller::loadComponent(0),
		map([
			'Ajax.Ajax' => \Ajax\Controller\Component\AjaxComponent::class,
			'Auth' => \Cake\Controller\Component\AuthComponent::class,
			'Cache.Cache' => \Cache\Controller\Component\CacheComponent::class,
			'Cache.PartialCache' => \Cache\Controller\Component\PartialCacheComponent::class,
			'Calendar.Calendar' => \Calendar\Controller\Component\CalendarComponent::class,
			'Captcha.Captcha' => \Captcha\Controller\Component\CaptchaComponent::class,
			'Captcha.Preparer' => \Captcha\Controller\Component\PreparerComponent::class,
			'Data.CountryStateHelper' => \Data\Controller\Component\CountryStateHelperComponent::class,
			'Expose.Superimpose' => \Expose\Controller\Component\SuperimposeComponent::class,
			'Flash' => \Cake\Controller\Component\FlashComponent::class,
			'FormProtection' => \Cake\Controller\Component\FormProtectionComponent::class,
			'Paginator' => \App\Controller\Component\PaginatorComponent::class,
			'Ratings.Rating' => \Ratings\Controller\Component\RatingComponent::class,
			'RequestHandler' => \Cake\Controller\Component\RequestHandlerComponent::class,
			'Search.Search' => \Search\Controller\Component\SearchComponent::class,
			'Security' => \Cake\Controller\Component\SecurityComponent::class,
			'Setup.Setup' => \Setup\Controller\Component\SetupComponent::class,
			'TestHelper.Plugins' => \TestHelper\Controller\Component\PluginsComponent::class,
			'TestHelper.TestFixtures' => \TestHelper\Controller\Component\TestFixturesComponent::class,
			'TestHelper.TestGenerator' => \TestHelper\Controller\Component\TestGeneratorComponent::class,
			'TestHelper.TestRunner' => \TestHelper\Controller\Component\TestRunnerComponent::class,
			'TinyAuth.Auth' => \TinyAuth\Controller\Component\AuthComponent::class,
			'TinyAuth.AuthUser' => \TinyAuth\Controller\Component\AuthUserComponent::class,
			'Tools.Common' => \Tools\Controller\Component\CommonComponent::class,
			'Tools.Mobile' => \Tools\Controller\Component\MobileComponent::class,
			'Tools.RefererRedirect' => \Tools\Controller\Component\RefererRedirectComponent::class,
			'Tools.Url' => \Tools\Controller\Component\UrlComponent::class,
		])
	);

	override(
		\Cake\Core\PluginApplicationInterface::addPlugin(0),
		map([
			'Ajax' => \Cake\Http\BaseApplication::class,
			'AssetCompress' => \Cake\Http\BaseApplication::class,
			'AuthSandbox' => \Cake\Http\BaseApplication::class,
			'Bake' => \Cake\Http\BaseApplication::class,
			'BootstrapUI' => \Cake\Http\BaseApplication::class,
			'Burzum/CakeServiceLayer' => \Cake\Http\BaseApplication::class,
			'Cache' => \Cake\Http\BaseApplication::class,
			'Cake/TwigView' => \Cake\Http\BaseApplication::class,
			'CakeDto' => \Cake\Http\BaseApplication::class,
			'Calendar' => \Cake\Http\BaseApplication::class,
			'Captcha' => \Cake\Http\BaseApplication::class,
			'CsvView' => \Cake\Http\BaseApplication::class,
			'Data' => \Cake\Http\BaseApplication::class,
			'DatabaseLog' => \Cake\Http\BaseApplication::class,
			'DebugKit' => \Cake\Http\BaseApplication::class,
			'Expose' => \Cake\Http\BaseApplication::class,
			'Feed' => \Cake\Http\BaseApplication::class,
			'Feedback' => \Cake\Http\BaseApplication::class,
			'Flash' => \Cake\Http\BaseApplication::class,
			'Geo' => \Cake\Http\BaseApplication::class,
			'Icings/Menu' => \Cake\Http\BaseApplication::class,
			'IdeHelper' => \Cake\Http\BaseApplication::class,
			'Markup' => \Cake\Http\BaseApplication::class,
			'Meta' => \Cake\Http\BaseApplication::class,
			'Migrations' => \Cake\Http\BaseApplication::class,
			'ModelGraph' => \Cake\Http\BaseApplication::class,
			'Queue' => \Cake\Http\BaseApplication::class,
			'Ratings' => \Cake\Http\BaseApplication::class,
			'Sandbox' => \Cake\Http\BaseApplication::class,
			'Search' => \Cake\Http\BaseApplication::class,
			'Setup' => \Cake\Http\BaseApplication::class,
			'Shim' => \Cake\Http\BaseApplication::class,
			'StateMachine' => \Cake\Http\BaseApplication::class,
			'StateMachineSandbox' => \Cake\Http\BaseApplication::class,
			'Tags' => \Cake\Http\BaseApplication::class,
			'TestHelper' => \Cake\Http\BaseApplication::class,
			'TinyAuth' => \Cake\Http\BaseApplication::class,
			'Tools' => \Cake\Http\BaseApplication::class,
		])
	);

	override(
		\Cake\Database\Type::build(0),
		map([
			'biginteger' => \Cake\Database\Type\IntegerType::class,
			'binary' => \Cake\Database\Type\BinaryType::class,
			'binaryuuid' => \Cake\Database\Type\BinaryUuidType::class,
			'boolean' => \Cake\Database\Type\BoolType::class,
			'char' => \Cake\Database\Type\StringType::class,
			'date' => \Cake\Database\Type\DateType::class,
			'datetime' => \Cake\Database\Type\DateTimeType::class,
			'datetimefractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'decimal' => \Cake\Database\Type\DecimalType::class,
			'float' => \Cake\Database\Type\FloatType::class,
			'image' => \Captcha\Database\Type\ImageType::class,
			'integer' => \Cake\Database\Type\IntegerType::class,
			'json' => \Cake\Database\Type\JsonType::class,
			'object' => \Geo\Database\Type\ObjectType::class,
			'smallinteger' => \Cake\Database\Type\IntegerType::class,
			'string' => \Cake\Database\Type\StringType::class,
			'text' => \Cake\Database\Type\StringType::class,
			'time' => \Cake\Database\Type\TimeType::class,
			'timestamp' => \Cake\Database\Type\DateTimeType::class,
			'timestampfractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'timestamptimezone' => \Cake\Database\Type\DateTimeTimezoneType::class,
			'tinyinteger' => \Cake\Database\Type\IntegerType::class,
			'uuid' => \Cake\Database\Type\UuidType::class,
		])
	);

	override(
		\Cake\Datasource\ModelAwareTrait::loadModel(0),
		map([
			'Captcha.Captchas' => \Captcha\Model\Table\CaptchasTable::class,
			'Data.Addresses' => \Data\Model\Table\AddressesTable::class,
			'Data.Cities' => \Data\Model\Table\CitiesTable::class,
			'Data.Continents' => \Data\Model\Table\ContinentsTable::class,
			'Data.Counties' => \Data\Model\Table\CountiesTable::class,
			'Data.Countries' => \Data\Model\Table\CountriesTable::class,
			'Data.Currencies' => \Data\Model\Table\CurrenciesTable::class,
			'Data.Districts' => \Data\Model\Table\DistrictsTable::class,
			'Data.Languages' => \Data\Model\Table\LanguagesTable::class,
			'Data.Locations' => \Data\Model\Table\LocationsTable::class,
			'Data.MimeTypeImages' => \Data\Model\Table\MimeTypeImagesTable::class,
			'Data.MimeTypes' => \Data\Model\Table\MimeTypesTable::class,
			'Data.PostalCodes' => \Data\Model\Table\PostalCodesTable::class,
			'Data.States' => \Data\Model\Table\StatesTable::class,
			'DatabaseLog.DatabaseLogApp' => \DatabaseLog\Model\Table\DatabaseLogAppTable::class,
			'DatabaseLog.DatabaseLogs' => \DatabaseLog\Model\Table\DatabaseLogsTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Feedback.Feedbackstore' => \Feedback\Model\Table\FeedbackstoreTable::class,
			'Geo.GeocodedAddresses' => \Geo\Model\Table\GeocodedAddressesTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'Ratings.Ratings' => \Ratings\Model\Table\RatingsTable::class,
			'Roles' => \App\Model\Table\RolesTable::class,
			'Sandbox.Animals' => \Sandbox\Model\Table\AnimalsTable::class,
			'Sandbox.BitmaskRecords' => \Sandbox\Model\Table\BitmaskRecordsTable::class,
			'Sandbox.CountryRecords' => \Sandbox\Model\Table\CountryRecordsTable::class,
			'Sandbox.Events' => \Sandbox\Model\Table\EventsTable::class,
			'Sandbox.ExampleRecords' => \Sandbox\Model\Table\ExampleRecordsTable::class,
			'Sandbox.ExposedUsers' => \Sandbox\Model\Table\ExposedUsersTable::class,
			'Sandbox.SandboxCategories' => \Sandbox\Model\Table\SandboxCategoriesTable::class,
			'Sandbox.SandboxPosts' => \Sandbox\Model\Table\SandboxPostsTable::class,
			'Sandbox.SandboxRatings' => \Sandbox\Model\Table\SandboxRatingsTable::class,
			'Sandbox.SandboxUsers' => \Sandbox\Model\Table\SandboxUsersTable::class,
			'Tags.Tagged' => \Tags\Model\Table\TaggedTable::class,
			'Tags.Tags' => \Tags\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	override(
		\Cake\Datasource\QueryInterface::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Association::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorInterface::get(0),
		map([
			'Captcha.Captchas' => \Captcha\Model\Table\CaptchasTable::class,
			'Data.Addresses' => \Data\Model\Table\AddressesTable::class,
			'Data.Cities' => \Data\Model\Table\CitiesTable::class,
			'Data.Continents' => \Data\Model\Table\ContinentsTable::class,
			'Data.Counties' => \Data\Model\Table\CountiesTable::class,
			'Data.Countries' => \Data\Model\Table\CountriesTable::class,
			'Data.Currencies' => \Data\Model\Table\CurrenciesTable::class,
			'Data.Districts' => \Data\Model\Table\DistrictsTable::class,
			'Data.Languages' => \Data\Model\Table\LanguagesTable::class,
			'Data.Locations' => \Data\Model\Table\LocationsTable::class,
			'Data.MimeTypeImages' => \Data\Model\Table\MimeTypeImagesTable::class,
			'Data.MimeTypes' => \Data\Model\Table\MimeTypesTable::class,
			'Data.PostalCodes' => \Data\Model\Table\PostalCodesTable::class,
			'Data.States' => \Data\Model\Table\StatesTable::class,
			'DatabaseLog.DatabaseLogApp' => \DatabaseLog\Model\Table\DatabaseLogAppTable::class,
			'DatabaseLog.DatabaseLogs' => \DatabaseLog\Model\Table\DatabaseLogsTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Feedback.Feedbackstore' => \Feedback\Model\Table\FeedbackstoreTable::class,
			'Geo.GeocodedAddresses' => \Geo\Model\Table\GeocodedAddressesTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'Ratings.Ratings' => \Ratings\Model\Table\RatingsTable::class,
			'Roles' => \App\Model\Table\RolesTable::class,
			'Sandbox.Animals' => \Sandbox\Model\Table\AnimalsTable::class,
			'Sandbox.BitmaskRecords' => \Sandbox\Model\Table\BitmaskRecordsTable::class,
			'Sandbox.CountryRecords' => \Sandbox\Model\Table\CountryRecordsTable::class,
			'Sandbox.Events' => \Sandbox\Model\Table\EventsTable::class,
			'Sandbox.ExampleRecords' => \Sandbox\Model\Table\ExampleRecordsTable::class,
			'Sandbox.ExposedUsers' => \Sandbox\Model\Table\ExposedUsersTable::class,
			'Sandbox.SandboxCategories' => \Sandbox\Model\Table\SandboxCategoriesTable::class,
			'Sandbox.SandboxPosts' => \Sandbox\Model\Table\SandboxPostsTable::class,
			'Sandbox.SandboxRatings' => \Sandbox\Model\Table\SandboxRatingsTable::class,
			'Sandbox.SandboxUsers' => \Sandbox\Model\Table\SandboxUsersTable::class,
			'Tags.Tagged' => \Tags\Model\Table\TaggedTable::class,
			'Tags.Tags' => \Tags\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	override(
		\Cake\ORM\Table::addBehavior(0),
		map([
			'Calendar.Calendar' => \Cake\ORM\Table::class,
			'Captcha.Captcha' => \Cake\ORM\Table::class,
			'Captcha.PassiveCaptcha' => \Cake\ORM\Table::class,
			'CounterCache' => \Cake\ORM\Table::class,
			'DebugKit.Timed' => \Cake\ORM\Table::class,
			'Expose.Expose' => \Cake\ORM\Table::class,
			'Expose.Superimpose' => \Cake\ORM\Table::class,
			'Geo.Geocoder' => \Cake\ORM\Table::class,
			'Ratings.Ratable' => \Cake\ORM\Table::class,
			'Search.Search' => \Cake\ORM\Table::class,
			'Tags.Tag' => \Cake\ORM\Table::class,
			'Timestamp' => \Cake\ORM\Table::class,
			'Tools.AfterSave' => \Cake\ORM\Table::class,
			'Tools.Bitmasked' => \Cake\ORM\Table::class,
			'Tools.Confirmable' => \Cake\ORM\Table::class,
			'Tools.Jsonable' => \Cake\ORM\Table::class,
			'Tools.Neighbor' => \Cake\ORM\Table::class,
			'Tools.Passwordable' => \Cake\ORM\Table::class,
			'Tools.Reset' => \Cake\ORM\Table::class,
			'Tools.Slugged' => \Cake\ORM\Table::class,
			'Tools.String' => \Cake\ORM\Table::class,
			'Tools.Toggle' => \Cake\ORM\Table::class,
			'Tools.TypeMap' => \Cake\ORM\Table::class,
			'Tools.Typographic' => \Cake\ORM\Table::class,
			'Translate' => \Cake\ORM\Table::class,
			'Tree' => \Cake\ORM\Table::class,
		])
	);

	override(
		\Cake\ORM\Table::belongToMany(0),
		map([
			'Captcha.Captchas' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Addresses' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Cities' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Continents' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Counties' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Countries' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Currencies' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Districts' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Languages' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.Locations' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.MimeTypes' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.PostalCodes' => \Cake\ORM\Association\BelongsToMany::class,
			'Data.States' => \Cake\ORM\Association\BelongsToMany::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\BelongsToMany::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsToMany::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\BelongsToMany::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\BelongsToMany::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\BelongsToMany::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\BelongsToMany::class,
			'Ratings.Ratings' => \Cake\ORM\Association\BelongsToMany::class,
			'Roles' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.Animals' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.Events' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.ExposedUsers' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\BelongsToMany::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\BelongsToMany::class,
			'Tags.Tagged' => \Cake\ORM\Association\BelongsToMany::class,
			'Tags.Tags' => \Cake\ORM\Association\BelongsToMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsToMany::class,
			'Users' => \Cake\ORM\Association\BelongsToMany::class,
		])
	);

	override(
		\Cake\ORM\Table::belongsTo(0),
		map([
			'Captcha.Captchas' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Addresses' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Cities' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Continents' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Counties' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Countries' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Currencies' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Districts' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Languages' => \Cake\ORM\Association\BelongsTo::class,
			'Data.Locations' => \Cake\ORM\Association\BelongsTo::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\BelongsTo::class,
			'Data.MimeTypes' => \Cake\ORM\Association\BelongsTo::class,
			'Data.PostalCodes' => \Cake\ORM\Association\BelongsTo::class,
			'Data.States' => \Cake\ORM\Association\BelongsTo::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\BelongsTo::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsTo::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\BelongsTo::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\BelongsTo::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\BelongsTo::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\BelongsTo::class,
			'Ratings.Ratings' => \Cake\ORM\Association\BelongsTo::class,
			'Roles' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.Animals' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.Events' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.ExposedUsers' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\BelongsTo::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\BelongsTo::class,
			'Tags.Tagged' => \Cake\ORM\Association\BelongsTo::class,
			'Tags.Tags' => \Cake\ORM\Association\BelongsTo::class,
			'Tools.Tokens' => \Cake\ORM\Association\BelongsTo::class,
			'Users' => \Cake\ORM\Association\BelongsTo::class,
		])
	);

	override(
		\Cake\ORM\Table::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Table::hasMany(0),
		map([
			'Captcha.Captchas' => \Cake\ORM\Association\HasMany::class,
			'Data.Addresses' => \Cake\ORM\Association\HasMany::class,
			'Data.Cities' => \Cake\ORM\Association\HasMany::class,
			'Data.Continents' => \Cake\ORM\Association\HasMany::class,
			'Data.Counties' => \Cake\ORM\Association\HasMany::class,
			'Data.Countries' => \Cake\ORM\Association\HasMany::class,
			'Data.Currencies' => \Cake\ORM\Association\HasMany::class,
			'Data.Districts' => \Cake\ORM\Association\HasMany::class,
			'Data.Languages' => \Cake\ORM\Association\HasMany::class,
			'Data.Locations' => \Cake\ORM\Association\HasMany::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\HasMany::class,
			'Data.MimeTypes' => \Cake\ORM\Association\HasMany::class,
			'Data.PostalCodes' => \Cake\ORM\Association\HasMany::class,
			'Data.States' => \Cake\ORM\Association\HasMany::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\HasMany::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasMany::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\HasMany::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\HasMany::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\HasMany::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\HasMany::class,
			'Ratings.Ratings' => \Cake\ORM\Association\HasMany::class,
			'Roles' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.Animals' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.Events' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.ExposedUsers' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\HasMany::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\HasMany::class,
			'Tags.Tagged' => \Cake\ORM\Association\HasMany::class,
			'Tags.Tags' => \Cake\ORM\Association\HasMany::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasMany::class,
			'Users' => \Cake\ORM\Association\HasMany::class,
		])
	);

	override(
		\Cake\ORM\Table::hasOne(0),
		map([
			'Captcha.Captchas' => \Cake\ORM\Association\HasOne::class,
			'Data.Addresses' => \Cake\ORM\Association\HasOne::class,
			'Data.Cities' => \Cake\ORM\Association\HasOne::class,
			'Data.Continents' => \Cake\ORM\Association\HasOne::class,
			'Data.Counties' => \Cake\ORM\Association\HasOne::class,
			'Data.Countries' => \Cake\ORM\Association\HasOne::class,
			'Data.Currencies' => \Cake\ORM\Association\HasOne::class,
			'Data.Districts' => \Cake\ORM\Association\HasOne::class,
			'Data.Languages' => \Cake\ORM\Association\HasOne::class,
			'Data.Locations' => \Cake\ORM\Association\HasOne::class,
			'Data.MimeTypeImages' => \Cake\ORM\Association\HasOne::class,
			'Data.MimeTypes' => \Cake\ORM\Association\HasOne::class,
			'Data.PostalCodes' => \Cake\ORM\Association\HasOne::class,
			'Data.States' => \Cake\ORM\Association\HasOne::class,
			'DatabaseLog.DatabaseLogApp' => \Cake\ORM\Association\HasOne::class,
			'DatabaseLog.DatabaseLogs' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Panels' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasOne::class,
			'Feedback.Feedbackstore' => \Cake\ORM\Association\HasOne::class,
			'Geo.GeocodedAddresses' => \Cake\ORM\Association\HasOne::class,
			'Queue.QueueProcesses' => \Cake\ORM\Association\HasOne::class,
			'Queue.QueuedJobs' => \Cake\ORM\Association\HasOne::class,
			'Ratings.Ratings' => \Cake\ORM\Association\HasOne::class,
			'Roles' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.Animals' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.BitmaskRecords' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.CountryRecords' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.Events' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.ExampleRecords' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.ExposedUsers' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxCategories' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxPosts' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxRatings' => \Cake\ORM\Association\HasOne::class,
			'Sandbox.SandboxUsers' => \Cake\ORM\Association\HasOne::class,
			'Tags.Tagged' => \Cake\ORM\Association\HasOne::class,
			'Tags.Tags' => \Cake\ORM\Association\HasOne::class,
			'Tools.Tokens' => \Cake\ORM\Association\HasOne::class,
			'Users' => \Cake\ORM\Association\HasOne::class,
		])
	);

	override(
		\Cake\ORM\TableRegistry::get(0),
		map([
			'Captcha.Captchas' => \Captcha\Model\Table\CaptchasTable::class,
			'Data.Addresses' => \Data\Model\Table\AddressesTable::class,
			'Data.Cities' => \Data\Model\Table\CitiesTable::class,
			'Data.Continents' => \Data\Model\Table\ContinentsTable::class,
			'Data.Counties' => \Data\Model\Table\CountiesTable::class,
			'Data.Countries' => \Data\Model\Table\CountriesTable::class,
			'Data.Currencies' => \Data\Model\Table\CurrenciesTable::class,
			'Data.Districts' => \Data\Model\Table\DistrictsTable::class,
			'Data.Languages' => \Data\Model\Table\LanguagesTable::class,
			'Data.Locations' => \Data\Model\Table\LocationsTable::class,
			'Data.MimeTypeImages' => \Data\Model\Table\MimeTypeImagesTable::class,
			'Data.MimeTypes' => \Data\Model\Table\MimeTypesTable::class,
			'Data.PostalCodes' => \Data\Model\Table\PostalCodesTable::class,
			'Data.States' => \Data\Model\Table\StatesTable::class,
			'DatabaseLog.DatabaseLogApp' => \DatabaseLog\Model\Table\DatabaseLogAppTable::class,
			'DatabaseLog.DatabaseLogs' => \DatabaseLog\Model\Table\DatabaseLogsTable::class,
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'Feedback.Feedbackstore' => \Feedback\Model\Table\FeedbackstoreTable::class,
			'Geo.GeocodedAddresses' => \Geo\Model\Table\GeocodedAddressesTable::class,
			'Queue.QueueProcesses' => \Queue\Model\Table\QueueProcessesTable::class,
			'Queue.QueuedJobs' => \Queue\Model\Table\QueuedJobsTable::class,
			'Ratings.Ratings' => \Ratings\Model\Table\RatingsTable::class,
			'Roles' => \App\Model\Table\RolesTable::class,
			'Sandbox.Animals' => \Sandbox\Model\Table\AnimalsTable::class,
			'Sandbox.BitmaskRecords' => \Sandbox\Model\Table\BitmaskRecordsTable::class,
			'Sandbox.CountryRecords' => \Sandbox\Model\Table\CountryRecordsTable::class,
			'Sandbox.Events' => \Sandbox\Model\Table\EventsTable::class,
			'Sandbox.ExampleRecords' => \Sandbox\Model\Table\ExampleRecordsTable::class,
			'Sandbox.ExposedUsers' => \Sandbox\Model\Table\ExposedUsersTable::class,
			'Sandbox.SandboxCategories' => \Sandbox\Model\Table\SandboxCategoriesTable::class,
			'Sandbox.SandboxPosts' => \Sandbox\Model\Table\SandboxPostsTable::class,
			'Sandbox.SandboxRatings' => \Sandbox\Model\Table\SandboxRatingsTable::class,
			'Sandbox.SandboxUsers' => \Sandbox\Model\Table\SandboxUsersTable::class,
			'Tags.Tagged' => \Tags\Model\Table\TaggedTable::class,
			'Tags.Tags' => \Tags\Model\Table\TagsTable::class,
			'Tools.Tokens' => \Tools\Model\Table\TokensTable::class,
			'Users' => \App\Model\Table\UsersTable::class,
		])
	);

	expectedArguments(
		\Cake\Routing\Router::pathUrl(),
		0,
		'Account::action',
		'AuthSandbox.AuthSandbox::action',
		'Captcha.Captcha::action',
		'Contact::action',
		'Data.Addresses::action',
		'Data.Cities::action',
		'Data.Continents::action',
		'Data.Countries::action',
		'Data.Currencies::action',
		'Data.DataApp::action',
		'Data.Languages::action',
		'Data.MimeTypeImages::action',
		'Data.MimeTypes::action',
		'Data.PostalCodes::action',
		'Data.States::action',
		'DatabaseLog.DatabaseLog::action',
		'DatabaseLog.Logs::action',
		'DebugKit.Composer::action',
		'DebugKit.Dashboard::action',
		'DebugKit.DebugKit::action',
		'DebugKit.MailPreview::action',
		'DebugKit.Panels::action',
		'DebugKit.Requests::action',
		'DebugKit.Toolbar::action',
		'Export::action',
		'Expose.Expose::action',
		'Feedback.Feedback::action',
		'Geo.Geo::action',
		'Geo.GeocodedAddresses::action',
		'Misc::action',
		'Overview::action',
		'Pages::action',
		'Queue.Queue::action',
		'Queue.QueueProcesses::action',
		'Queue.QueuedJobs::action',
		'Sandbox.AjaxExamples::action',
		'Sandbox.AssetCompressExamples::action',
		'Sandbox.Bootstrap::action',
		'Sandbox.CacheExamples::action',
		'Sandbox.CakeExamples::action',
		'Sandbox.Calendar::action',
		'Sandbox.Captchas::action',
		'Sandbox.ChronosExamples::action',
		'Sandbox.Conventions::action',
		'Sandbox.Csv::action',
		'Sandbox.DtoExamples::action',
		'Sandbox.Examples::action',
		'Sandbox.ExposeExamples::action',
		'Sandbox.FeedExamples::action',
		'Sandbox.FeedbackExamples::action',
		'Sandbox.FlashExamples::action',
		'Sandbox.GeoExamples::action',
		'Sandbox.Inflector::action',
		'Sandbox.JqueryExamples::action',
		'Sandbox.JsExamples::action',
		'Sandbox.MarkupExamples::action',
		'Sandbox.MediaEmbed::action',
		'Sandbox.Menu::action',
		'Sandbox.PluginExamples::action',
		'Sandbox.Plugins::action',
		'Sandbox.QueueExamples::action',
		'Sandbox.Ratings::action',
		'Sandbox.Sandbox::action',
		'Sandbox.SandboxApp::action',
		'Sandbox.SearchExamples::action',
		'Sandbox.ServiceExamples::action',
		'Sandbox.SocialShare::action',
		'Sandbox.Tags::action',
		'Sandbox.ToolsExamples::action',
		'Sandbox.Tryouts::action',
		'Sandbox.TwigExamples::action',
		'Setup.Backend::action',
		'Setup.Database::action',
		'Setup.Setup::action',
		'TestHelper.Plugins::action',
		'TestHelper.TestCases::action',
		'TestHelper.TestFixtures::action',
		'TestHelper.TestHelper::action',
		'Tools.ShuntRequest::action',
		'Users::action'
	);

	expectedArguments(
		\Cake\Validation\Validator::requirePresence(),
		1,
		'create',
		'update'
	);

	override(
		\Cake\View\View::element(0),
		map([
			'BootstrapUI.flash/default' => \Cake\View\View::class,
			'Cake/TwigView.twig_panel' => \Cake\View\View::class,
			'Data.States/search' => \Cake\View\View::class,
			'DatabaseLog.paging' => \Cake\View\View::class,
			'DatabaseLog.search' => \Cake\View\View::class,
			'DebugKit.cache_panel' => \Cake\View\View::class,
			'DebugKit.deprecations_panel' => \Cake\View\View::class,
			'DebugKit.environment_panel' => \Cake\View\View::class,
			'DebugKit.history_panel' => \Cake\View\View::class,
			'DebugKit.include_panel' => \Cake\View\View::class,
			'DebugKit.log_panel' => \Cake\View\View::class,
			'DebugKit.mail_panel' => \Cake\View\View::class,
			'DebugKit.packages_panel' => \Cake\View\View::class,
			'DebugKit.preview_header' => \Cake\View\View::class,
			'DebugKit.request_panel' => \Cake\View\View::class,
			'DebugKit.routes_panel' => \Cake\View\View::class,
			'DebugKit.session_panel' => \Cake\View\View::class,
			'DebugKit.sql_log_panel' => \Cake\View\View::class,
			'DebugKit.timer_panel' => \Cake\View\View::class,
			'DebugKit.variables_panel' => \Cake\View\View::class,
			'Feedback.sidebar' => \Cake\View\View::class,
			'Geo.pagination' => \Cake\View\View::class,
			'Queue.search' => \Cake\View\View::class,
			'Sandbox.actions' => \Cake\View\View::class,
			'Sandbox.feed/element' => \Cake\View\View::class,
			'Sandbox.inflector/result-row' => \Cake\View\View::class,
			'Sandbox.inflector/results' => \Cake\View\View::class,
			'Sandbox.navigation/ajax' => \Cake\View\View::class,
			'Sandbox.navigation/dto' => \Cake\View\View::class,
			'Sandbox.navigation/media_embed' => \Cake\View\View::class,
			'Sandbox.navigation/queue' => \Cake\View\View::class,
			'Sandbox.navigation/search' => \Cake\View\View::class,
			'Sandbox.navigation/service' => \Cake\View\View::class,
			'Sandbox.navigation/tags' => \Cake\View\View::class,
			'Sandbox.navigation/tools' => \Cake\View\View::class,
			'TestHelper.test_cases' => \Cake\View\View::class,
			'TestHelper.url' => \Cake\View\View::class,
			'TinyAuth.auth_panel' => \Cake\View\View::class,
			'Tools.pagination' => \Cake\View\View::class,
			'flash/default' => \Cake\View\View::class,
			'flash/error' => \Cake\View\View::class,
			'flash/info' => \Cake\View\View::class,
			'flash/success' => \Cake\View\View::class,
			'flash/warning' => \Cake\View\View::class,
			'navigation' => \Cake\View\View::class,
			'stats' => \Cake\View\View::class,
		])
	);

	override(
		\Cake\View\View::loadHelper(0),
		map([
			'App' => \App\View\Helper\AppHelper::class,
			'AssetCompress.AssetCompress' => \AssetCompress\View\Helper\AssetCompressHelper::class,
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'BootstrapUI.Breadcrumbs' => \BootstrapUI\View\Helper\BreadcrumbsHelper::class,
			'BootstrapUI.Flash' => \BootstrapUI\View\Helper\FlashHelper::class,
			'BootstrapUI.Form' => \BootstrapUI\View\Helper\FormHelper::class,
			'BootstrapUI.Html' => \BootstrapUI\View\Helper\HtmlHelper::class,
			'BootstrapUI.Paginator' => \BootstrapUI\View\Helper\PaginatorHelper::class,
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'CakeDto.Template' => \CakeDto\View\Helper\TemplateHelper::class,
			'Calendar.Calendar' => \Calendar\View\Helper\CalendarHelper::class,
			'Captcha.Captcha' => \Captcha\View\Helper\CaptchaHelper::class,
			'Data.Data' => \Data\View\Helper\DataHelper::class,
			'Data.MimeType' => \Data\View\Helper\MimeTypeHelper::class,
			'DatabaseLog.Log' => \DatabaseLog\View\Helper\LogHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \App\View\Helper\FormHelper::class,
			'Geo.GoogleMap' => \Geo\View\Helper\GoogleMapHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'Icings/Menu.Menu' => \Icings\Menu\View\Helper\MenuHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Markup.Highlighter' => \Markup\View\Helper\HighlighterHelper::class,
			'Meta.Meta' => \Meta\View\Helper\MetaHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Navigation' => \App\View\Helper\NavigationHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Queue.Queue' => \Queue\View\Helper\QueueHelper::class,
			'Queue.QueueProgress' => \Queue\View\Helper\QueueProgressHelper::class,
			'Ratings.Rating' => \Ratings\View\Helper\RatingHelper::class,
			'Sandbox' => \App\View\Helper\SandboxHelper::class,
			'Sandbox.MediaEmbedBbcode' => \Sandbox\View\Helper\MediaEmbedBbcodeHelper::class,
			'Search.Search' => \Search\View\Helper\SearchHelper::class,
			'Tags.Tag' => \Tags\View\Helper\TagHelper::class,
			'Tags.TagCloud' => \Tags\View\Helper\TagCloudHelper::class,
			'TestHelper.TestHelper' => \TestHelper\View\Helper\TestHelperHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'TinyAuth.AuthUser' => \TinyAuth\View\Helper\AuthUserHelper::class,
			'TinyAuth.Authentication' => \TinyAuth\View\Helper\AuthenticationHelper::class,
			'Tools.Common' => \Tools\View\Helper\CommonHelper::class,
			'Tools.Form' => \Tools\View\Helper\FormHelper::class,
			'Tools.Format' => \Tools\View\Helper\FormatHelper::class,
			'Tools.Gravatar' => \Tools\View\Helper\GravatarHelper::class,
			'Tools.Html' => \Tools\View\Helper\HtmlHelper::class,
			'Tools.Meter' => \Tools\View\Helper\MeterHelper::class,
			'Tools.Number' => \Tools\View\Helper\NumberHelper::class,
			'Tools.Obfuscate' => \Tools\View\Helper\ObfuscateHelper::class,
			'Tools.Progress' => \Tools\View\Helper\ProgressHelper::class,
			'Tools.QrCode' => \Tools\View\Helper\QrCodeHelper::class,
			'Tools.Text' => \Tools\View\Helper\TextHelper::class,
			'Tools.Time' => \Tools\View\Helper\TimeHelper::class,
			'Tools.Timeline' => \Tools\View\Helper\TimelineHelper::class,
			'Tools.Tree' => \Tools\View\Helper\TreeHelper::class,
			'Tools.Typography' => \Tools\View\Helper\TypographyHelper::class,
			'Tools.Url' => \Tools\View\Helper\UrlHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
		])
	);

	expectedArguments(
		\Migrations\AbstractMigration::table(0),
		0,
		'captchas',
		'continents',
		'countries',
		'currencies',
		'database_logs',
		'events',
		'exposed_users',
		'languages',
		'queue_processes',
		'queued_jobs',
		'roles',
		'sandbox_animals',
		'sandbox_categories',
		'sandbox_posts',
		'sandbox_ratings',
		'sandbox_users',
		'social_profiles',
		'state_machine_item_state_history',
		'state_machine_item_states',
		'state_machine_items',
		'state_machine_locks',
		'state_machine_processes',
		'state_machine_timeouts',
		'state_machine_transition_logs',
		'states',
		'tags_tagged',
		'tags_tags',
		'users',
	);

	override(
		\Queue\Model\Table\QueuedJobsTable::createJob(0),
		map([
			'CostsExample' => \Queue\Shell\Task\QueueCostsExampleTask::class,
			'Email' => \Queue\Shell\Task\QueueEmailTask::class,
			'Example' => \Queue\Shell\Task\QueueExampleTask::class,
			'ExceptionExample' => \Queue\Shell\Task\QueueExceptionExampleTask::class,
			'Execute' => \Queue\Shell\Task\QueueExecuteTask::class,
			'MonitorExample' => \Queue\Shell\Task\QueueMonitorExampleTask::class,
			'MyTaskName' => \App\Shell\Task\QueueMyTaskNameTask::class,
			'ProgressExample' => \Queue\Shell\Task\QueueProgressExampleTask::class,
			'RetryExample' => \Queue\Shell\Task\QueueRetryExampleTask::class,
			'SuperExample' => \Queue\Shell\Task\QueueSuperExampleTask::class,
			'UniqueExample' => \Queue\Shell\Task\QueueUniqueExampleTask::class,
		])
	);

}
