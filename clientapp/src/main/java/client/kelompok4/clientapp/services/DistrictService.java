
package client.kelompok4.clientapp.services;

import client.kelompok4.clientapp.models.District;
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
public class DistrictService {
    @Autowired
    private RestTemplate restTemplate;
    
    @Value("${api.url}")
    private String url;
    
    
    //READ
    public List<District> getAll() {
        ResponseEntity<List<District>> response =  restTemplate
                .exchange(url+"/list-district", HttpMethod.GET, null, 
                new ParameterizedTypeReference<List<District>>() {});
        
        return response.getBody();
    }
    
    //READ BY ID
    public District getById(Integer id) {
        return restTemplate.getForEntity(url + "/disget/" + id, District.class).getBody();
    }
    
    //UPDATE
    public void update(Integer id, District district) {
        HttpEntity entity = new HttpEntity(district);
        ResponseEntity<String> res = restTemplate.exchange(url + "/dis-update/" + id, HttpMethod.PUT, entity, 
                new ParameterizedTypeReference<String>() {
});
    }
    
    //CREATE 
     public void create(District district) {
        HttpEntity entity = new HttpEntity(district);
        ResponseEntity<String> res = restTemplate.exchange(url+"/dis-insert", HttpMethod.POST, entity,  
                new ParameterizedTypeReference<String>(){});
    }
     
    //DELETE
     public void delete(Integer id){
      restTemplate.delete(url+ "/dis-delete/" + id, District.class);
     }
    
    
}
