<?php
namespace App\Http\Repository\FTO\Pilots;
use App\Model\Pilot\PilotReg;
use DB;
class CertificateRepository
{
    public function getCertificate($id)
    {
        //$underFTO=session()->get('ftoId');
        // $result = DB::select("SELECT p.id as pilotIdFInal,p.firstName,p.middleName,p.lastName,p.email,p.mobile,p.adharNumber,p.category,p.courseId,p.courseDate,p.uaopnumber,p.uaopvalidity,p. uinnumber,p.uinvalidity,p.npnt,p.ftoId,p.droneSerialNumber,p.proffession,p.stateID,p.cityId,p.experience,p.passport,p.drivingLicence,p.eduQualification,p.passportPhoto,p.sentOtp,p.otpVerified,p.status,p.ftoApproved,p.adminApproved,p.entryBy,p.createdAt,p.updatedAt
        // , s.*,c.* from pilotregistration as p, states as s, cities as c where p.stateID=s.id and p.cityId=c.id and ftoId='".$underFTO."'");
        
        $result = DB::select("SELECT `id`, `firstName`, `middleName`, `lastName`, `email`, `password`, `mobile`, `adharNumber`, `category`, `courseId`, `courseDate`, `uaopnumber`, `uaopvalidity`, `uinnumber`, `uinvalidity`, `npnt`, `ftoId`, `droneSerialNumber`, `danNumber`, `drnModelNum`, `drnManufacturarName`, `insurance`, `insVal`, `proffession`, `stateID`, `cityId`, `experience`, `passport`, `drivingLicence`, `eduQualification`, `passportPhoto`, `sentOtp`, `otpVerified`, `rating`, `status`, `ftoApproved`, `adminApproved`, `entryBy`, `createdAt`, `updatedAt` FROM `pilotregistration` where id=$id");
        return $result;
        //dd($result);
    }
}