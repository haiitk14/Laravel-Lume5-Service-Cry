<?php

/**
 * CRYOSOFT API
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.1
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

/**
 * CRYOSOFT API
 * @version 0.0.1
 */

$router->get('/', function () use ($router) {
    return $router->app->version();
});
/**
 * PUT createStudy
 * Summary: 
 * Notes: create a new study
 * Output-Formats: [application/json]
 */
$router->PUT('/api/v1/studies', 'Api1\\Studies@createStudy');
/**
 * GET findStudies
 * Summary: 
 * Notes: Get a list of studies
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies', 'Api1\\Studies@findStudies');
/**
 * DELETE deleteStudyById
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->DELETE('/api/v1/studies/{id}', 'Api1\\Studies@deleteStudyById');
/**
 * GET getStudyById
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies/{id}', 'Api1\\Studies@getStudyById');
/**
 * PUT saveStudyAs
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->PUT('/api/v1/studies/{id}/clone', 'Api1\\Studies@saveStudyAs');
/**
 * GET refreshMesh
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies/{id}/refreshMesh', 'Api1\\Studies@refreshMesh');
/**
 * GET openStudy
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies/{id}/open', 'Api1\\Studies@openStudy');

/**
 * GET getProductionById
 * Summary: 
 * Notes: get production by id
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/productions/{id}', 'Api1\\Productions@getProductionById');

/**
 * GET getProductById
 * Summary: 
 * Notes: get product by id
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/products/{id}', 'Api1\\Products@getProductById');
/**
 * PUT appendElementsToProduct
 * Summary: 
 * Notes: append elements to product
 * Output-Formats: [application/json]
 */
$router->PUT('/api/v1/products/{id}/elements', 'Api1\\Products@appendElementsToProduct');

/**
 * GET getElementsByProductId
 * Summary: 
 * Notes: get elements of a products
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/products/{id}/elements', 'Api1\\Products@getElementsByProductId');

/**
 * GET getEquipments
 * Summary: 
 * Notes: get all available equipments
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/equipments', 'Api1\\Equipments@getEquipments');
/**
 * GET getEquipmentById
 * Summary: 
 * Notes: get equipment by id
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/equipments/{id}', 'Api1\\Equipments@getEquipmentById');
/**
 * GET packingElementsGet
 * Summary: 
 * Notes: get available packing elements
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/packingElements', 'Api1\\PackingElements@findPackingElements');
/**
 * GET shapesGet
 * Summary: 
 * Notes: get available shapes
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/shapes', 'Api1\\Shapes@getShapes');

/**
 * GET findComponents
 * Summary: 
 * Notes: find available components by filter
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/components', 'Api1\\Components@findComponents');

/**
 * GET getStudyEquipments
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies/{id}/equipments', 'Api1\\Studies@getStudyEquipments');

/**
 * GET getProductViewModel
 * Summary: 
 * Notes: get product view model
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/products/{id}/view', 'Api1\\Products@getProductViewModel');

/**
 *  * GET headBalanceOptimum
 * Summary: 
 * Notes: get head balance optimum result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/optimum/headBalance/{idStudy}', 'Api1\\Output@getOptimumHeadBalance');


/**
 * GET headBalanceMaxOptimum
 * Summary: 
 * Notes: get head balance optimum max result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/optimum/headBalanceMax/{idStudy}', 'Api1\\Output@getOptimumHeadBalanceMax');

/**
 * GET EquipSizing
 * Summary: 
 * Notes: get study equipment equip sizing
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/optimum/equipSizing/{idStudyEquipment}', 'Api1\\Output@getEquipSizing');

/**
 * GET headBalanceEstimation
 * Summary: 
 * Notes: get head balance estimation result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/estimation/headBalance/{idStudy}', 'Api1\\Output@getEstimationHeadBalance');

/**
 * GET AnalyticalConsumptionResult
 * Summary: 
 * Notes: get analytical consumption result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/common/consumption/{idStudy}', 'Api1\\Output@getAnalyticalConsumption');

/**
 * GETAnalyticalEconomicResult
 * Summary: 
 * Notes: get analytical economic result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/common/economic/{idStudy}', 'Api1\\Output@getAnalyticalEconomic');

/**
 * DELETE removeProductElement
 * Summary: 
 * Notes: remove a product element
 * Output-Formats: [application/json]
 */
$router->DELETE('/api/v1/products/{id}/elements', 'Api1\\Products@removeProductElement');

/**
 * GET productElementMoveDown
 * Summary: 
 * Notes: move a product element down
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/productElmts/{id}/movedown', 'Api1\\ProductElements@productElementMoveDown');

/**
 * GET productElementMoveUp
 * Summary: 
 * Notes: move a product element up
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/productElmts/{id}/moveup', 'Api1\\ProductElements@productElementMoveUp');

/**
 * PUT newProduct
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->PUT('/api/v1/studies/{id}/product', 'Api1\\Studies@newProduct');

/**
 * POST updateProduct
 * Summary: 
 * Notes: update a product
 * Output-Formats: [application/json]
 */
$router->POST('/api/v1/studies/{id}/product', 'Api1\\Studies@updateProduct');

/**
 * GET findPackingLayers
 * Summary: 
 * Notes: get packing layers
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/packingLayers', 'Api1\\Packings@findPackingLayers');

/**
 * GET getMeshParamDefByIdUser
 * Summary: 
 * Notes: get available MeshParamDef by filter
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/meshparamdef', 'Api1\\Settings@getMyMeshParamDef');

/**
 * PUT saveMeshParamDefByIdUser
 * Summary: 
 * Notes: 	
 * Output-Formats: [application/json]
 */
$router->POST('/api/v1/savemeshparamdef', 'Api1\\Settings@saveMyMeshParamDef');

/**
 * GET getTempRecordPtsDefByIdUser
 * Summary: 
 * Notes: get available MeshParamDef by filter	
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/temprecordptsdef', 'Api1\\Settings@getMyTempRecordPtsDef');

/**
 * POST saveMyTempRecordPtsDef
 * Summary: 
 * Notes: save TempRecordPtsDef by id
 * Output-Formats: [application/json]
 */
$router->POST('/api/v1/savetemprecordptsdef', 'Api1\\Settings@saveMyTempRecordPtsDef');

/**
 * GET getCalculationParametersDefByIdUser
 * Summary: 
 * Notes: get available CalculationParametersDef by filter
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/calculationparametersdef', 'Api1\\Settings@getMyCalculationParametersDef');

/**
 * POST savecalculationparametersdef
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->POST('/api/v1/savecalculationparametersdef', 'Api1\\Settings@saveMyCalculationParametersDef');

/**
 * GET CheckControl View
 * Summary: 
 * Notes: get head balance result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/checkcontrolview', 'Api1\\CheckControl@checkControlView');

/**
 * GET CheckControl
 * Summary: 
 * Notes: get head balance result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/checkcontrol', 'Api1\\CheckControl@checkControl');


/**
 * GET getSymbol
 * Summary: 
 * Notes: get symbol study
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/symbol/{idStudy}', 'Api1\\Output@getSymbol');

/**
 * GET getProInfoStudy
 * Summary: 
 * Notes: product production study
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/proInfoStudy/{idStudy}', 'Api1\\Output@getProInfoStudy');


/**
 *  * GET headBalanceOptimum
 * Summary: 
 * Notes: get head balance optimum result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/optimum/headBalance/{idStudy}', 'Api1\\Output@getOptimumHeadBalance');


/**
 * GET headBalanceMaxOptimum
 * Summary: 
 * Notes: get head balance optimum max result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/optimum/headBalanceMax/{idStudy}', 'Api1\\Output@getOptimumHeadBalanceMax');

/**
 * GET EquipSizing
 * Summary: 
 * Notes: get study equipment equip sizing
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/optimum/equipSizing/{idStudyEquipment}', 'Api1\\Output@getEquipSizing');

/**
 * GET temperatureCalculation
 * Summary: 
 * Notes: gettemperature calulation data
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/estimation/trCalculate/{idStudyEquipment}', 'Api1\\Output@temperatureCalculation');

/**
 * GET viewEquipTr
 * Summary: 
 * Notes: view Equipment Temperature
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/estimation/viewEquipTr/{idStudyEquipment}', 'Api1\\Output@viewEquipTr');

/**
 * GET getEstimationHeadBalance
 * Summary: 
 * Notes: get head balance estimation result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/estimation/headBalance', 'Api1\\Output@getEstimationHeadBalance');

/**
 * GET AnalyticalConsumptionResult
 * Summary: 
 * Notes: get analytical consumption result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/common/consumption/{idStudy}', 'Api1\\Output@getAnalyticalConsumption');

/**
 * GET sizingOptimumResult
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/output/sizingresult/{idStudy}/optimum', 'Api1\\Output@sizingOptimumResult');

/**
 * GET temperatureProfile
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/output/temperatureProfile/{idStudyEquipment}', 'Api1\\Output@temperatureProfile');

/**
 * GETAnalyticalEconomicResult
 * Summary: 
 * Notes: get analytical economic result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/common/economic/{idStudy}', 'Api1\\Output@getAnalyticalEconomic');

/**
 * GET StudyPackingLayers
 * Summary: 
 * Notes: get head balance result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies/{id}/packingLayers', 'Api1\\Studies@getStudyPackingLayers');

/**
 * POST savePacking
 * Summary: 
 * Notes: get head balance result
 * Output-Formats: [application/json]
 */
$router->POST('/api/v1/studies/{id}/packingLayers', 'Api1\\Studies@savePacking');

/**
 * GET start Estimation
 * Summary: 
 * Notes: get head balance result
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies/{id}/calculate', 'Api1\\Calculator@startStudyCalculation');

/**
 * GET findLines
 * Summary: 
 * Notes: Get a list of line
 * Output-Formats: [application/json]
 */
$router->GET('/api/v1/studies/{id}/getListLine', 'Api1\\Studies@loadPipeline');

/**
 * PUT createLine
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$router->PUT('/api/v1/lines', 'Api1\\Lines@createLine');


include_once("api_ngonc.php");
include_once("api_dongtp.php");
include_once("api_thaolt.php");
include_once("api_huytd.php");
include_once("api_haidt.php");

