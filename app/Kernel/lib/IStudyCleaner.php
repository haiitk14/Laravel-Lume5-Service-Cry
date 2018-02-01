<?php
// **********************************************************************
//
// Copyright (c) 2003-2017 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.7.0
//
// <auto-generated>
//
// Generated from file `IStudyCleaner.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Cryosoft.php';
}

namespace Cryosoft\StudyCleaner
{
    global $Cryosoft_StudyCleaner__t_IStudyCleaner;
    global $Cryosoft_StudyCleaner__t_IStudyCleanerPrx;

    class IStudyCleanerPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::Cryosoft::StudyCleaner::IStudyCleaner', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Cryosoft::StudyCleaner::IStudyCleaner', $facet);
        }

        public static function ice_staticId()
        {
            return '::Cryosoft::StudyCleaner::IStudyCleaner';
        }
    }

    $Cryosoft_StudyCleaner__t_IStudyCleaner = IcePHP_defineClass('::Cryosoft::StudyCleaner::IStudyCleaner', '\\Cryosoft\\StudyCleaner\\IStudyCleaner', -1, false, true, $Ice__t_Value, null);

    $Cryosoft_StudyCleaner__t_IStudyCleanerPrx = IcePHP_defineProxy('::Cryosoft::StudyCleaner::IStudyCleaner', $Ice__t_ObjectPrx, null);

    IcePHP_defineOperation($Cryosoft_StudyCleaner__t_IStudyCleanerPrx, 'SCStudyClean', 0, 0, 0, array(array($Cryosoft__t_stSKConf), array($IcePHP__t_int)), null, array($IcePHP__t_long), null);
}
?>
