<?php

class Formula
{
    public static function SubBaseVolume($roadWidth, $subBaseDepth, $lengthOfTheRoad)
    {
        $wsb = $roadWidth + 0.3;
        $subBaseActualDepth = $subBaseDepth + $subBaseDepth/2;
        $subBaseVolume = $subBaseActualDepth * $wsb * $lengthOfTheRoad;
        return $subBaseVolume;
    }

    public static function BaseVolume($roadWidth, $baseDepth, $lengthOfTheRoad)
    {
        $baseActualDepth = $baseDepth/2;
        $baseVolume = $baseActualDepth*$roadWidth*$lengthOfTheRoad;
        return $baseVolume;
    }

    public static function TotalSubBaseLabourCost($subBaseVolume, $subBaselabourCost)
    {
        $totalSubBaseLabourCost = $subBaseVolume*$subBaselabourCost;
        return $totalSubBaseLabourCost;
    }

    public static function TotalSubBaseMaterialPrice($subBaseVolume, $subBaseMaterialPrice)
    {
        $totalSubBaseMaterialPrice = $subBaseVolume*$subBaseMaterialPrice;
        return $totalSubBaseMaterialPrice;
    }

    public static function TotalBaseMaterialPrice($baseMaterialPrice, $baseVolume)
    {
        $totalBaseMaterialPrice = $baseMaterialPrice * $baseVolume;
        return $totalBaseMaterialPrice;
    }


    public static function TotalBaseLabourCost($baseVolume, $baseLabourCost)
    {
        $totalBaseLabourCost = $baseVolume * $baseLabourCost;
        return $totalBaseLabourCost;
    }

    // public static function TotalCost(){
    //     $totalCost = TotalSubBaseLabourCost() + $totalSubBaseMaterialPrice + $totalBaseMaterialPrice + $totalBaseLabourCost;

    // }
}
