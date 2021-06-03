/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package client.kelompok4.clientapp.models;

import lombok.Data;

/**
 *
 * @author LENOVO-KL
 */
@Data
public class District {
    private Integer districtId;
    private String kotakab;
    private String districtName;
    private Province provinceId;
//    private Integer provinceId;
//    private String provinceName;

    public District() {
    }

    public District(District district) {
        this.districtId = district.getDistrictId();
        this.kotakab = district.getKotakab();
        this.districtName = district.getDistrictName();
        this.provinceId=district.getProvinceId();
//        this.provinceId= district.getProvinceId();
//        this.provinceName = district.getProvinceName();
    }
    
}
