package teistermask.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import teistermask.bindingModel.TaskBindingModel;
import teistermask.entity.Task;
import teistermask.repository.TaskRepository;

import java.util.List;
import java.util.stream.Collectors;

@Controller
public class TaskController {
	private final TaskRepository taskRepository;

	@Autowired
	public TaskController(TaskRepository taskRepository) {
		this.taskRepository = taskRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		// TODO: Implement me...
		List<Task> tasks = taskRepository.findAll();

		List<Task> openTasks = tasks.stream()
				.filter(t -> t.getStatus().equals("Open"))
				.collect(Collectors.toList());
		List<Task> inProgressTasks = tasks.stream()
				.filter(t -> t.getStatus().equals("In Progress"))
				.collect(Collectors.toList());
		List<Task> finishedTasks = tasks.stream()
				.filter(t -> t.getStatus().equals("Finished"))
				.collect(Collectors.toList());

		model.addAttribute("openTasks", openTasks);
		model.addAttribute("inProgressTasks", inProgressTasks);
		model.addAttribute("finishedTasks", finishedTasks);
		model.addAttribute("view", "task/index");

		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		// TODO: Implement me...
		model.addAttribute("view", "task/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, Task taskModel) {
		// TODO: Implement me...
		if (taskModel.getTitle().equals("") || taskModel.getStatus().equals("")) {
			model.addAttribute("task",taskModel);
			model.addAttribute("view", "task/create");
			return "base-layout";
		}

		taskRepository.saveAndFlush(taskModel);

		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		// TODO: Implement me...
		Task task = taskRepository.findOne(id);
		if(task!=null){
			model.addAttribute("task",task);
			model.addAttribute("view","task/edit");
			return "base-layout";
		}
		return "redirect:/";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(@PathVariable int id, TaskBindingModel taskBindingModel) {
		// TODO: Implement me...
		if (!this.taskRepository.exists(id) || taskBindingModel.getTitle().equals("")) {
			return "redirect:/";
		}

		Task taskForEdit = this.taskRepository.findOne(id);

		taskForEdit.setTitle(taskBindingModel.getTitle());
		taskForEdit.setStatus(taskBindingModel.getStatus());

		this.taskRepository.saveAndFlush(taskForEdit);

		return "redirect:/";
	}
}
