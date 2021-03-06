<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Parser\\FiddlerParser' => $baseDir . '/app/Parser/FiddlerParser.php',
    'App\\Parser\\Parser' => $baseDir . '/app/Parser/Parser.php',
    'App\\Parser\\ParserInterface' => $baseDir . '/app/Parser/ParserInterface.php',
    'App\\Utils\\Config' => $baseDir . '/app/Utils/Config.php',
    'App\\Utils\\Generation' => $baseDir . '/app/Utils/Generation.php',
    'App\\Utils\\HttpRequest' => $baseDir . '/app/Utils/HttpRequest.php',
    'App\\Utils\\Process' => $baseDir . '/app/Utils/Process.php',
    'App\\Utils\\Qiniu' => $baseDir . '/app/Utils/Qiniu.php',
    'App\\Utils\\Sync' => $baseDir . '/app/Utils/Sync.php',
    'App\\Utils\\Util' => $baseDir . '/app/Utils/Util.php',
    'Dotenv\\Dotenv' => $vendorDir . '/vlucas/phpdotenv/src/Dotenv.php',
    'Dotenv\\Exception\\ExceptionInterface' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
    'Dotenv\\Exception\\InvalidFileException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
    'Dotenv\\Exception\\InvalidPathException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
    'Dotenv\\Exception\\ValidationException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
    'Dotenv\\Loader\\Lines' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Lines.php',
    'Dotenv\\Loader\\Loader' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Loader.php',
    'Dotenv\\Loader\\LoaderInterface' => $vendorDir . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
    'Dotenv\\Loader\\Parser' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Parser.php',
    'Dotenv\\Loader\\Value' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Value.php',
    'Dotenv\\Regex\\Regex' => $vendorDir . '/vlucas/phpdotenv/src/Regex/Regex.php',
    'Dotenv\\Repository\\AbstractRepository' => $vendorDir . '/vlucas/phpdotenv/src/Repository/AbstractRepository.php',
    'Dotenv\\Repository\\AdapterRepository' => $vendorDir . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
    'Dotenv\\Repository\\Adapter\\ApacheAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
    'Dotenv\\Repository\\Adapter\\ArrayAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
    'Dotenv\\Repository\\Adapter\\AvailabilityInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/AvailabilityInterface.php',
    'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
    'Dotenv\\Repository\\Adapter\\PutenvAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
    'Dotenv\\Repository\\Adapter\\ReaderInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
    'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
    'Dotenv\\Repository\\Adapter\\WriterInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
    'Dotenv\\Repository\\RepositoryBuilder' => $vendorDir . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
    'Dotenv\\Repository\\RepositoryInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
    'Dotenv\\Result\\Error' => $vendorDir . '/vlucas/phpdotenv/src/Result/Error.php',
    'Dotenv\\Result\\Result' => $vendorDir . '/vlucas/phpdotenv/src/Result/Result.php',
    'Dotenv\\Result\\Success' => $vendorDir . '/vlucas/phpdotenv/src/Result/Success.php',
    'Dotenv\\Store\\FileStore' => $vendorDir . '/vlucas/phpdotenv/src/Store/FileStore.php',
    'Dotenv\\Store\\File\\Paths' => $vendorDir . '/vlucas/phpdotenv/src/Store/File/Paths.php',
    'Dotenv\\Store\\File\\Reader' => $vendorDir . '/vlucas/phpdotenv/src/Store/File/Reader.php',
    'Dotenv\\Store\\StoreBuilder' => $vendorDir . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
    'Dotenv\\Store\\StoreInterface' => $vendorDir . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
    'Dotenv\\Validator' => $vendorDir . '/vlucas/phpdotenv/src/Validator.php',
    'PhpOption\\LazyOption' => $vendorDir . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
    'PhpOption\\None' => $vendorDir . '/phpoption/phpoption/src/PhpOption/None.php',
    'PhpOption\\Option' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Option.php',
    'PhpOption\\Some' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Some.php',
    'Qiniu\\Auth' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Auth.php',
    'Qiniu\\Cdn\\CdnManager' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Cdn/CdnManager.php',
    'Qiniu\\Config' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Config.php',
    'Qiniu\\Etag' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Etag.php',
    'Qiniu\\Http\\Client' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Http/Client.php',
    'Qiniu\\Http\\Error' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Http/Error.php',
    'Qiniu\\Http\\Request' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Http/Request.php',
    'Qiniu\\Http\\Response' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Http/Response.php',
    'Qiniu\\Processing\\ImageUrlBuilder' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Processing/ImageUrlBuilder.php',
    'Qiniu\\Processing\\Operation' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Processing/Operation.php',
    'Qiniu\\Processing\\PersistentFop' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Processing/PersistentFop.php',
    'Qiniu\\Region' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Region.php',
    'Qiniu\\Rtc\\AppClient' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Rtc/AppClient.php',
    'Qiniu\\Sms\\Sms' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Sms/Sms.php',
    'Qiniu\\Storage\\ArgusManager' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Storage/ArgusManager.php',
    'Qiniu\\Storage\\BucketManager' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Storage/BucketManager.php',
    'Qiniu\\Storage\\FormUploader' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Storage/FormUploader.php',
    'Qiniu\\Storage\\ResumeUploader' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Storage/ResumeUploader.php',
    'Qiniu\\Storage\\UploadManager' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Storage/UploadManager.php',
    'Qiniu\\Zone' => $vendorDir . '/qiniu/php-sdk/src/Qiniu/Zone.php',
    'Symfony\\Component\\DomCrawler\\AbstractUriElement' => $vendorDir . '/symfony/dom-crawler/AbstractUriElement.php',
    'Symfony\\Component\\DomCrawler\\Crawler' => $vendorDir . '/symfony/dom-crawler/Crawler.php',
    'Symfony\\Component\\DomCrawler\\Field\\ChoiceFormField' => $vendorDir . '/symfony/dom-crawler/Field/ChoiceFormField.php',
    'Symfony\\Component\\DomCrawler\\Field\\FileFormField' => $vendorDir . '/symfony/dom-crawler/Field/FileFormField.php',
    'Symfony\\Component\\DomCrawler\\Field\\FormField' => $vendorDir . '/symfony/dom-crawler/Field/FormField.php',
    'Symfony\\Component\\DomCrawler\\Field\\InputFormField' => $vendorDir . '/symfony/dom-crawler/Field/InputFormField.php',
    'Symfony\\Component\\DomCrawler\\Field\\TextareaFormField' => $vendorDir . '/symfony/dom-crawler/Field/TextareaFormField.php',
    'Symfony\\Component\\DomCrawler\\Form' => $vendorDir . '/symfony/dom-crawler/Form.php',
    'Symfony\\Component\\DomCrawler\\FormFieldRegistry' => $vendorDir . '/symfony/dom-crawler/FormFieldRegistry.php',
    'Symfony\\Component\\DomCrawler\\Image' => $vendorDir . '/symfony/dom-crawler/Image.php',
    'Symfony\\Component\\DomCrawler\\Link' => $vendorDir . '/symfony/dom-crawler/Link.php',
    'Symfony\\Component\\DomCrawler\\Test\\Constraint\\CrawlerSelectorAttributeValueSame' => $vendorDir . '/symfony/dom-crawler/Test/Constraint/CrawlerSelectorAttributeValueSame.php',
    'Symfony\\Component\\DomCrawler\\Test\\Constraint\\CrawlerSelectorExists' => $vendorDir . '/symfony/dom-crawler/Test/Constraint/CrawlerSelectorExists.php',
    'Symfony\\Component\\DomCrawler\\Test\\Constraint\\CrawlerSelectorTextContains' => $vendorDir . '/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextContains.php',
    'Symfony\\Component\\DomCrawler\\Test\\Constraint\\CrawlerSelectorTextSame' => $vendorDir . '/symfony/dom-crawler/Test/Constraint/CrawlerSelectorTextSame.php',
    'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/process/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/process/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Process\\Exception\\LogicException' => $vendorDir . '/symfony/process/Exception/LogicException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => $vendorDir . '/symfony/process/Exception/ProcessFailedException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessSignaledException' => $vendorDir . '/symfony/process/Exception/ProcessSignaledException.php',
    'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => $vendorDir . '/symfony/process/Exception/ProcessTimedOutException.php',
    'Symfony\\Component\\Process\\Exception\\RuntimeException' => $vendorDir . '/symfony/process/Exception/RuntimeException.php',
    'Symfony\\Component\\Process\\ExecutableFinder' => $vendorDir . '/symfony/process/ExecutableFinder.php',
    'Symfony\\Component\\Process\\InputStream' => $vendorDir . '/symfony/process/InputStream.php',
    'Symfony\\Component\\Process\\PhpExecutableFinder' => $vendorDir . '/symfony/process/PhpExecutableFinder.php',
    'Symfony\\Component\\Process\\PhpProcess' => $vendorDir . '/symfony/process/PhpProcess.php',
    'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => $vendorDir . '/symfony/process/Pipes/AbstractPipes.php',
    'Symfony\\Component\\Process\\Pipes\\PipesInterface' => $vendorDir . '/symfony/process/Pipes/PipesInterface.php',
    'Symfony\\Component\\Process\\Pipes\\UnixPipes' => $vendorDir . '/symfony/process/Pipes/UnixPipes.php',
    'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => $vendorDir . '/symfony/process/Pipes/WindowsPipes.php',
    'Symfony\\Component\\Process\\Process' => $vendorDir . '/symfony/process/Process.php',
    'Symfony\\Component\\Process\\ProcessUtils' => $vendorDir . '/symfony/process/ProcessUtils.php',
    'Symfony\\Component\\Serializer\\Annotation\\DiscriminatorMap' => $vendorDir . '/symfony/serializer/Annotation/DiscriminatorMap.php',
    'Symfony\\Component\\Serializer\\Annotation\\Groups' => $vendorDir . '/symfony/serializer/Annotation/Groups.php',
    'Symfony\\Component\\Serializer\\Annotation\\MaxDepth' => $vendorDir . '/symfony/serializer/Annotation/MaxDepth.php',
    'Symfony\\Component\\Serializer\\Annotation\\SerializedName' => $vendorDir . '/symfony/serializer/Annotation/SerializedName.php',
    'Symfony\\Component\\Serializer\\DependencyInjection\\SerializerPass' => $vendorDir . '/symfony/serializer/DependencyInjection/SerializerPass.php',
    'Symfony\\Component\\Serializer\\Encoder\\ChainDecoder' => $vendorDir . '/symfony/serializer/Encoder/ChainDecoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\ChainEncoder' => $vendorDir . '/symfony/serializer/Encoder/ChainEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\ContextAwareDecoderInterface' => $vendorDir . '/symfony/serializer/Encoder/ContextAwareDecoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\ContextAwareEncoderInterface' => $vendorDir . '/symfony/serializer/Encoder/ContextAwareEncoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\CsvEncoder' => $vendorDir . '/symfony/serializer/Encoder/CsvEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => $vendorDir . '/symfony/serializer/Encoder/DecoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => $vendorDir . '/symfony/serializer/Encoder/EncoderInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\JsonDecode' => $vendorDir . '/symfony/serializer/Encoder/JsonDecode.php',
    'Symfony\\Component\\Serializer\\Encoder\\JsonEncode' => $vendorDir . '/symfony/serializer/Encoder/JsonEncode.php',
    'Symfony\\Component\\Serializer\\Encoder\\JsonEncoder' => $vendorDir . '/symfony/serializer/Encoder/JsonEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\NormalizationAwareInterface' => $vendorDir . '/symfony/serializer/Encoder/NormalizationAwareInterface.php',
    'Symfony\\Component\\Serializer\\Encoder\\XmlEncoder' => $vendorDir . '/symfony/serializer/Encoder/XmlEncoder.php',
    'Symfony\\Component\\Serializer\\Encoder\\YamlEncoder' => $vendorDir . '/symfony/serializer/Encoder/YamlEncoder.php',
    'Symfony\\Component\\Serializer\\Exception\\BadMethodCallException' => $vendorDir . '/symfony/serializer/Exception/BadMethodCallException.php',
    'Symfony\\Component\\Serializer\\Exception\\CircularReferenceException' => $vendorDir . '/symfony/serializer/Exception/CircularReferenceException.php',
    'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/serializer/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException' => $vendorDir . '/symfony/serializer/Exception/ExtraAttributesException.php',
    'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/serializer/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\Serializer\\Exception\\LogicException' => $vendorDir . '/symfony/serializer/Exception/LogicException.php',
    'Symfony\\Component\\Serializer\\Exception\\MappingException' => $vendorDir . '/symfony/serializer/Exception/MappingException.php',
    'Symfony\\Component\\Serializer\\Exception\\MissingConstructorArgumentsException' => $vendorDir . '/symfony/serializer/Exception/MissingConstructorArgumentsException.php',
    'Symfony\\Component\\Serializer\\Exception\\NotEncodableValueException' => $vendorDir . '/symfony/serializer/Exception/NotEncodableValueException.php',
    'Symfony\\Component\\Serializer\\Exception\\NotNormalizableValueException' => $vendorDir . '/symfony/serializer/Exception/NotNormalizableValueException.php',
    'Symfony\\Component\\Serializer\\Exception\\RuntimeException' => $vendorDir . '/symfony/serializer/Exception/RuntimeException.php',
    'Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException' => $vendorDir . '/symfony/serializer/Exception/UnexpectedValueException.php',
    'Symfony\\Component\\Serializer\\Exception\\UnsupportedException' => $vendorDir . '/symfony/serializer/Exception/UnsupportedException.php',
    'Symfony\\Component\\Serializer\\Extractor\\ObjectPropertyListExtractor' => $vendorDir . '/symfony/serializer/Extractor/ObjectPropertyListExtractor.php',
    'Symfony\\Component\\Serializer\\Extractor\\ObjectPropertyListExtractorInterface' => $vendorDir . '/symfony/serializer/Extractor/ObjectPropertyListExtractorInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\AttributeMetadata' => $vendorDir . '/symfony/serializer/Mapping/AttributeMetadata.php',
    'Symfony\\Component\\Serializer\\Mapping\\AttributeMetadataInterface' => $vendorDir . '/symfony/serializer/Mapping/AttributeMetadataInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorFromClassMetadata' => $vendorDir . '/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorMapping' => $vendorDir . '/symfony/serializer/Mapping/ClassDiscriminatorMapping.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => $vendorDir . '/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassMetadata' => $vendorDir . '/symfony/serializer/Mapping/ClassMetadata.php',
    'Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface' => $vendorDir . '/symfony/serializer/Mapping/ClassMetadataInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory' => $vendorDir . '/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory' => $vendorDir . '/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => $vendorDir . '/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassResolverTrait' => $vendorDir . '/symfony/serializer/Mapping/Factory/ClassResolverTrait.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\AnnotationLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/AnnotationLoader.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\FileLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/FileLoader.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain' => $vendorDir . '/symfony/serializer/Mapping/Loader/LoaderChain.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface' => $vendorDir . '/symfony/serializer/Mapping/Loader/LoaderInterface.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/XmlFileLoader.php',
    'Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader' => $vendorDir . '/symfony/serializer/Mapping/Loader/YamlFileLoader.php',
    'Symfony\\Component\\Serializer\\NameConverter\\AdvancedNameConverterInterface' => $vendorDir . '/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php',
    'Symfony\\Component\\Serializer\\NameConverter\\CamelCaseToSnakeCaseNameConverter' => $vendorDir . '/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php',
    'Symfony\\Component\\Serializer\\NameConverter\\MetadataAwareNameConverter' => $vendorDir . '/symfony/serializer/NameConverter/MetadataAwareNameConverter.php',
    'Symfony\\Component\\Serializer\\NameConverter\\NameConverterInterface' => $vendorDir . '/symfony/serializer/NameConverter/NameConverterInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\AbstractNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/AbstractNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\AbstractObjectNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/AbstractObjectNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ArrayDenormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ArrayDenormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\CacheableSupportsMethodInterface' => $vendorDir . '/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ConstraintViolationListNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ContextAwareDenormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ContextAwareNormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\CustomNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/CustomNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DataUriNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DataUriNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DateIntervalNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DateIntervalNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DateTimeNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DateTimeNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DateTimeZoneNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizableInterface' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizableInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareInterface' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizerAwareInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerAwareTrait' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizerAwareTrait.php',
    'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/DenormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\GetSetMethodNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/GetSetMethodNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\JsonSerializableNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/JsonSerializableNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizableInterface' => $vendorDir . '/symfony/serializer/Normalizer/NormalizableInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareInterface' => $vendorDir . '/symfony/serializer/Normalizer/NormalizerAwareInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizerAwareTrait' => $vendorDir . '/symfony/serializer/Normalizer/NormalizerAwareTrait.php',
    'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => $vendorDir . '/symfony/serializer/Normalizer/NormalizerInterface.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ObjectNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ObjectToPopulateTrait' => $vendorDir . '/symfony/serializer/Normalizer/ObjectToPopulateTrait.php',
    'Symfony\\Component\\Serializer\\Normalizer\\ProblemNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/ProblemNormalizer.php',
    'Symfony\\Component\\Serializer\\Normalizer\\PropertyNormalizer' => $vendorDir . '/symfony/serializer/Normalizer/PropertyNormalizer.php',
    'Symfony\\Component\\Serializer\\Serializer' => $vendorDir . '/symfony/serializer/Serializer.php',
    'Symfony\\Component\\Serializer\\SerializerAwareInterface' => $vendorDir . '/symfony/serializer/SerializerAwareInterface.php',
    'Symfony\\Component\\Serializer\\SerializerAwareTrait' => $vendorDir . '/symfony/serializer/SerializerAwareTrait.php',
    'Symfony\\Component\\Serializer\\SerializerInterface' => $vendorDir . '/symfony/serializer/SerializerInterface.php',
    'Symfony\\Component\\Yaml\\Command\\LintCommand' => $vendorDir . '/symfony/yaml/Command/LintCommand.php',
    'Symfony\\Component\\Yaml\\Dumper' => $vendorDir . '/symfony/yaml/Dumper.php',
    'Symfony\\Component\\Yaml\\Escaper' => $vendorDir . '/symfony/yaml/Escaper.php',
    'Symfony\\Component\\Yaml\\Exception\\DumpException' => $vendorDir . '/symfony/yaml/Exception/DumpException.php',
    'Symfony\\Component\\Yaml\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/yaml/Exception/ExceptionInterface.php',
    'Symfony\\Component\\Yaml\\Exception\\ParseException' => $vendorDir . '/symfony/yaml/Exception/ParseException.php',
    'Symfony\\Component\\Yaml\\Exception\\RuntimeException' => $vendorDir . '/symfony/yaml/Exception/RuntimeException.php',
    'Symfony\\Component\\Yaml\\Inline' => $vendorDir . '/symfony/yaml/Inline.php',
    'Symfony\\Component\\Yaml\\Parser' => $vendorDir . '/symfony/yaml/Parser.php',
    'Symfony\\Component\\Yaml\\Tag\\TaggedValue' => $vendorDir . '/symfony/yaml/Tag/TaggedValue.php',
    'Symfony\\Component\\Yaml\\Unescaper' => $vendorDir . '/symfony/yaml/Unescaper.php',
    'Symfony\\Component\\Yaml\\Yaml' => $vendorDir . '/symfony/yaml/Yaml.php',
    'Symfony\\Polyfill\\Ctype\\Ctype' => $vendorDir . '/symfony/polyfill-ctype/Ctype.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
);
