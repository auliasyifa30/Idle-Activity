/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package client.kelompok4.clientapp.controllers;

import client.kelompok4.clientapp.models.District;
import client.kelompok4.clientapp.services.DistrictService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;


@Controller
//@RequestMapping("/district")
public class DistrictController {
    @Autowired
    private DistrictService districtService;
    
    //READ
    @GetMapping ("/district")
    public String getAll(Model model) {
        model.addAttribute("district", districtService.getAll());
        return "district";
    }
    
    //GET BY ID
    @GetMapping("/{id}")
    public String getById(@PathVariable("id") Integer id, Model model) {
        model.addAttribute("district", districtService.getById(id));
        return "district-edit";
    }
    
    //ADD
     @GetMapping("/add")
    public String addForm(Model model) {
         District district = new District();
        model.addAttribute("district", district);
        return "district-add";
    }
    
    //ADD
    @PostMapping("/add")
    public String create(@ModelAttribute("district") District district) {
        districtService.create(district);
        return "redirect:/district";
    }
    
    //UPDATE
    @PostMapping("/update/{id}")
    public String update(@PathVariable("id") Integer id, @ModelAttribute("district") District district) {
        districtService.update(id, district);
        return "redirect:/district";
    }
    
    //DELETE
    @GetMapping("/delete/{id}")
    public String delete(@PathVariable ("id") Integer id,@ModelAttribute("district") District district){
        districtService.delete(id);
        return "redirect:/district";
    }
    
}
