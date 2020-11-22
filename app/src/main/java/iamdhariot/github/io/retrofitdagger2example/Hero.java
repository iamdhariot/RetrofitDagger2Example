package iamdhariot.github.io.retrofitdagger2example;

import com.google.gson.annotations.SerializedName;

public class Hero {
    private int id;
    private String name;
    public Hero(){

    }

    public Hero(int id, String name) {
        this.id = id;
        this.name = name;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
}
