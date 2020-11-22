package iamdhariot.github.io.retrofitdagger2example;

import java.util.List;

import retrofit2.Call;
import retrofit2.http.GET;

public interface Api {
    String BASE_URL = "http://192.168.43.122/android/";
    @GET("getdata.php")
    Call<List<Hero>> getHeroes();
}
