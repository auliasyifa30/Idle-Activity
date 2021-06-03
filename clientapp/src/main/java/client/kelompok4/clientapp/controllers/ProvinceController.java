
package client.kelompok4.clientapp.controllers;


import client.kelompok4.clientapp.models.Province;
import client.kelompok4.clientapp.services.ProvinceService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;


@Controller
@RequestMapping("province")
public class ProvinceController {
    
    @Autowired
    private ProvinceService provinceService;
    
    //READ
    @GetMapping
    public String getAll(Model model){
        model.addAttribute("provinces", provinceService.getAll());
        return "province";
    }
    
    //READ BY ID
    @GetMapping("/{id}")
    public String getById(@PathVariable("id") Integer id, Model model) {
        model.addAttribute("province", provinceService.getById(id));
        return "province-edit";
    }
    
    //UPDATE
    @PostMapping("/update/{id}")
    public String update(@PathVariable("id") Integer id, @ModelAttribute("province") Province province) {
        provinceService.update(id, province);
        return "redirect:/province";
    }
    
    //ADD
    @GetMapping("/add")
    public String addForm(Model model) {
        Province province = new Province();
        model.addAttribute("province", province);
        return "province-add";
    }
    
    //ADD
    @PostMapping("/add")
    public String create(@ModelAttribute("province") Province province) {
        provinceService.create(province);
        return "redirect:/province";
    }
    
    //DELETE
    @GetMapping("/delete/{id}")
    public String delete(@PathVariable ("id") Integer id,@ModelAttribute("province") Province province){
        provinceService.delete(id);
        return "redirect:/province";
    }
    
    
}
