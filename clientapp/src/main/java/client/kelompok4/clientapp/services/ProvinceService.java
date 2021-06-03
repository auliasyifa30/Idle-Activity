
package client.kelompok4.clientapp.services;


import client.kelompok4.clientapp.models.Province;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.core.ParameterizedTypeReference;
import org.springframework.http.HttpEntity;
import org.springframework.http.HttpMethod;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Service;
import org.springframework.web.client.RestTemplate;

@Service
public class ProvinceService {
    
    @Autowired
    private RestTemplate restTemplate;

    @Value("${api.url}")
    private String url;
    
    //READ ALL
    public List<Province> getAll() {
        ResponseEntity<List<Province>> response =  restTemplate
            .exchange(url+"/list-province", HttpMethod.GET, null, 
            new ParameterizedTypeReference<List<Province>>() {});
        
    return response.getBody();
    }
    
    
    //GET BY ID
    public Province getById(Integer id) {
        return restTemplate.getForEntity(url + "/provinceBy/"+ id, Province.class).getBody();
    }
    
    //UPDATE
    public void update(Integer id, Province province) {
        HttpEntity entity = new HttpEntity(province);
        ResponseEntity<String> res = restTemplate.exchange(url + "/update/" + id, HttpMethod.PUT, entity,
                new ParameterizedTypeReference<String>() {
});
    }
    
    //CREATE 
     public void create(Province province) {
        HttpEntity entity = new HttpEntity(province);
        ResponseEntity<String> res = restTemplate.exchange(url+"/insert", HttpMethod.POST, entity,
                new ParameterizedTypeReference<String>() {
                    
                });
    }
     
    //DELETE
     public void delete(Integer id){
      restTemplate.delete(url+ "/delete/"+ id, Province.class);
     }
    
}
